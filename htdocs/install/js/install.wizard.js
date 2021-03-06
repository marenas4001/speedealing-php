// Copyright (C) 2013	Regis Houssin	<regis.houssin@capnetworks.com>
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see <http://www.gnu.org/licenses/>.
// or see http://www.gnu.org/
//

$(document).ready(function() {
	// Elements
	var form = $('.wizard'),

	// If layout is centered
	centered;

	// Handle resizing (mostly for debugging)
	function handleWizardResize() {
		centerWizard(false);
	};

	// Register and first call
	$(window).bind('normalized-resize', handleWizardResize);

	/*
	 * Center function
	 * @param boolean animate whether or not to animate the position change
	 * @return void
	 */
	function centerWizard(animate) {
		form[animate ? 'animate' : 'css']({ marginTop: Math.max(0, Math.round(($.template.viewportHeight-30-form.outerHeight())/2))+'px' });
	};

	// Initial vertical adjust
	centerWizard(false);

	// Refresh position on change step
	form.on('wizardchange', function() { centerWizard(true); });

	// Validation
	if ($.validationEngine) {
		form.validationEngine();
	}

	$('.wizard fieldset').on('wizardleave', function() {
		// Called everytime a step (fieldset) becomes the active one
		var step = $(this).attr('id');
		if (step == 'database') {
			// Restore next button
			$('.wizard-next').show();
		} else if (step == 'install') {
			// Restore previous button
			$('.wizard-prev').show();
			// Reset progress bar
			$('#set_conf, #set_database, #set_security').setProgressValue(0, false);
		}
	});

	$('.wizard fieldset').on('wizardenter', function() {
		// Called everytime a step (fieldset) becomes the active one
		var step = $(this).attr('id');
		if (step == 'welcome') {
			$('.wizard-next').show();
		} else if (step == 'prerequisite') {
			$('.wizard-next, #reload_required, #reload_button').hide();
			// Check pre-requisites
			ckeckPrerequisite();
		} else if (step == 'users') {
			// nothing
		} else if (step == 'database') {
			$('.wizard-next').hide();
			$('#install_button').click(function() {
				$('.wizard').showWizardNextStep();
			});
			// Server or Client
			var install_type = $('input[name=install_type]:checked').val();
			if (install_type == 'server') {
				$('.syncuser, .remotebase').hide();
			} else if (install_type == 'client') {
				$('.syncuser').hide();
				$('.remotebase').show();
			}
			// First check for syncuser
			if ($('#couchdb_create_usersync').prop('checked')) {
				$('.syncuser').show();
			} else {
				$('.syncuser').hide();
			}
			// Check change for syncuser
			$('#couchdb_create_usersync').change(function() {
				if ($(this).prop('checked')) {
					getRandomToken('couchdb_user_sync');
					getRandomToken('couchdb_pass_sync');
					$('.syncuser').show('blind');
				} else {
					$('.syncuser').hide('blind');
				}
			});
			// First check for search engine user
			if ($('#couchdb_create_searchengineuser').prop('checked')) {
				$('.searchengine').show();
			} else {
				$('.searchengine').hide();
			}
			// Check change for search engine user
			$('#couchdb_create_searchengineuser').change(function() {
				if ($(this).prop('checked')) {
					$('.searchengine').show('blind');
				} else {
					$('.searchengine').hide('blind');
				}
			});
			// First check for replication
			if ($('#couchdb_replication').prop('checked')) {
				$('.remotebase').show();
			} else {
				$('.remotebase').hide();
			}
			// Check change for replication
			$('#couchdb_replication').change(function() {
				if ($(this).prop('checked')) {
					$('.remotebase').show('blind');
				} else {
					$('.remotebase').hide('blind');
				}
			});
		} else if (step == 'install') {
			var error = false;
			$('.wizard-prev').hide();
			$('#start_button').attr('disabled', 'disabled');
			$('#set_conf').progress({style: 'large'}).showProgressStripes();
			$('#set_database').progress({style: 'large'}).showProgressStripes();
			$('#set_security').progress({style: 'large'}).showProgressStripes();
			// Create config
			addConfig();
		}
	});
	
	// Create config
	function addConfig() {
		$.post("install/ajax/install.php", {
    		action: 'create_config',
    		couchdb_host: $('#couchdb_host').val(),
    		couchdb_port: $('#couchdb_port').val(),
    		memcached_host: ($('#memcached_host').prop('disabled') ?  false : $('#memcached_host').val()),
    		memcached_port: ($('#memcached_port').prop('disabled') ? false : $('#memcached_port').val())
		},
		function(value) {
			if (value.status == 'ok') {
				if ($('#couchdb_create_usersync').prop('checked')) {
					setProgressBar('set_conf', 50);
					addUsersync();
				} else {
					setProgressBar('set_conf', 100);
					addSystemDatabase();
				}
			} else {
				return false;
			}
		}, 'json');
	}
	
	// Add usersync
	function addUsersync() {
		$.post("install/ajax/install.php", {
    		action: 'create_syncuser',
    		couchdb_user_sync: $('#couchdb_user_sync').val(),
    		couchdb_pass_sync: $('#couchdb_pass_sync').val()
		},
		function(value) {
			if (value.status == 'ok') {
				setProgressBar('set_conf', 100);
				addSystemDatabase();
			} else {
				return false
			}
		}, 'json');
	}
	
	// Add system database
	function addSystemDatabase() {
		$.post("install/ajax/install.php", {
    		action: 'create_system_database'
		},
		function(value) {
			if (value.status == 'ok') {
				setProgressBar('set_database', 15);
				addEntityDatabase();
			} else {
				return false;
			}
		}, "json");
	}
	
	// Add database
	function addEntityDatabase() {
		$.post("install/ajax/install.php", {
    		action: 'create_entity_database',
    		couchdb_name: $('#couchdb_name').val()
		},
		function(value) {
			if (value.status == 'ok') {
				setProgressBar('set_database', 30);
				populateSystemDatabase();
			} else {
				return false;
			}
		}, "json");
	}
	
	// Populate system database
	function populateSystemDatabase() {
		if ($('#couchdb_replication').prop('checked')) {
			// Sync database
			// TODO add sync progress here
		} else {
			$.post("install/ajax/install.php", {
				action: 'populate_system_database'
			},
			function(value) {
				if (value.status == 'ok') {
					setProgressBar('set_database', 100);
					addSuperadmin();
				} else {
					return false;
				}
			}, 'json');
		}
	}
	
	// Create superadmin
	function addSuperadmin() {
		$.post("install/ajax/install.php", {
    		action: 'create_admin',
    		couchdb_name: $('#couchdb_name').val(),
    		couchdb_user_root: $('#couchdb_user_root').val(),
    		couchdb_pass_root: $('#couchdb_pass_root').val()
		},
		function(value) {
			if (value.status == 'ok') {
				setProgressBar('set_security', 50);
				addUser();
			} else {
				return false;
			}
		}, 'json');
	}
	
	// Create user
	function addUser() {
		$.post("install/ajax/install.php", {
    		action: 'create_user',
			couchdb_name: $('#couchdb_name').val(),
			couchdb_user_root: $('#couchdb_user_root').val(),
    		couchdb_pass_root: $('#couchdb_pass_root').val(),
    		couchdb_user_firstname: $('#couchdb_user_firstname').val(),
    		couchdb_user_lastname: $('#couchdb_user_lastname').val(),
    		couchdb_user_login: $('#couchdb_user_login').val(),
    		couchdb_user_pass: $('#couchdb_user_pass').val()
		},
		function(value) {
			if (value.status == 'ok') {
				if ($('#couchdb_create_searchengineuser').prop('checked')) {
					setProgressBar('set_security', 75);
					addSearchEngineUser();
				} else {
					setProgressBar('set_security', 100);
					lockInstall();
				}
			} else {
				return false;
			}
		}, 'json');
	}
	
	// Create user
	function addSearchEngineUser() {
		$.post("install/ajax/install.php", {
    		action: 'create_searchengine_user',
			couchdb_name: $('#couchdb_name').val(),
			couchdb_user_root: $('#couchdb_user_root').val(),
    		couchdb_pass_root: $('#couchdb_pass_root').val(),
    		couchdb_searchengine_login: $('#couchdb_searchengine_login').val(),
    		couchdb_searchengine_pass: $('#couchdb_searchengine_pass').val()
		},
		function(value) {
			if (value.status == 'ok') {
				setProgressBar('set_security', 100);
				lockInstall();
			} else {
				return false;
			}
		}, 'json');
	}
	
	// Add lock file
	function lockInstall() {
		$.post("install/ajax/install.php", {
    		action: 'lock_install',
    		couchdb_name: $('#couchdb_name').val(),
    		couchdb_user_root: $('#couchdb_user_root').val(),
    		couchdb_pass_root: $('#couchdb_pass_root').val()
		},
		function(value) {
			if (value.status == 'ok') {
				$('#start_button').removeAttr('disabled');
			} else {
				return false;
			}
		}, 'json');
	}
	
	// Set progress bar
	function setProgressBar(key, value) {
		$('#' + key).setProgressValue(value + '%');
		if (value == 100) {
			$('#' + key).changeProgressBarColor('green-bg', true)
						.hideProgressStripes();
		}
	}
	
	// Start button
	$('#start_button').click(function() {
		$(location).attr('href', $("base").attr("href"));
	});
	
	// Reload pre-requisite
	$('#reload_button').click(function() {
		ckeckPrerequisite();
	});
	
	// Check pre-requisites
	function ckeckPrerequisite() {
		// Add loader
		$('#php_version, #php_memory, #php_utf8, #php_gd, #php_curl, #php_memcached, #couchdb_rewrite, #conf_file').html('<span class="loader"></span>');
		// Check prerequisites
		$.getJSON('install/ajax/prerequisite.php', { action: 'check_prerequisite', lang: $('#selectlang').val() }, function(data) {
			if (data) {
				$.each(data, function(key, value) {
					if (key == 'memcached') {
						if (value == true) {
							$('.memcached').show();
							$('#memcached_host, #memcached_port').removeAttr('disabled');
						} else {
							$('.memcached').hide();
							$('#memcached_host, #memcached_port').attr('disabled', 'disabled');
						}
					} else if (key == 'continue') {
						if (value == true) {
							$('#reload_button, #reload_required').hide();
							$('.wizard-next').show();
						}
						else {
							$('#reload_required, #reload_button').show();
						}
					} else {
						$('#' + key).html(value);
					}
				});
			}
		});
	}
	
	// Get random security key
	$("#reload_identifier").click(function() {
		getRandomToken('couchdb_user_sync');
    });
	$("#reload_secretkey").click(function() {
		getRandomToken('couchdb_pass_sync');
    });
	function getRandomToken(input) {
		$.get("/install/ajax/security.php", {
    		action: 'getrandompassword'
		},
		function(token) {
			$("#" + input).html(token);
		});
	}
});