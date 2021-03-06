<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$errors = array(
		'CHARSET' => 'UTF-8',
		'MenuManager' => 'Menüverwaltung',
		// Errors
		'Error' => 'Fehler',
		'Errors' => 'Fehler',
		'ErrorBadEMail' => 'E-Mail %s ist ungültig',
		'ErrorBadUrl' => 'Url %s ist ungültig',
		'ErrorLoginAlreadyExists' => 'Login %s existiert bereits.',
		'ErrorGroupAlreadyExists' => 'Gruppe %s existiert bereits.',
		'ErrorRecordNotFound' => 'Eintrag nicht gefunden.',
		'ErrorFailToCopyFile' => 'Failed to copy file \'<b>%s</b>\' into \'<b>%s</b>\'.',
		'ErrorFailToRenameFile' => 'Failed to rename file \'<b>%s</b>\' into \'<b>%s</b>\'.',
		'ErrorFailToDeleteFile' => 'Fehler beim Löschen der Datei \'<b>%s</b>\'.',
		'ErrorFailToCreateFile' => 'Fehler beim Erstellen der Datei \'<b>%s</b>\'.',
		'ErrorFailToRenameDir' => 'Fehler beim Umbenennen des Verzeichnisses \'<b>%s</b>\' in \'<b>%s</b>\'.',
		'ErrorFailToCreateDir' => 'Fehler beim Erstellen des Verzeichnisses \'<b>%s</b>\'.',
		'ErrorFailToDeleteDir' => 'Fehler beim Löschen des Verzeichnisses \'<b>%s</b>\'.',
		'ErrorFailedToDeleteJoinedFiles' => 'Partner kann nicht gelöscht werden. Entfernen Sie zuerst alle verknüpften Dateien.',
		'ErrorThisContactIsAlreadyDefinedAsThisType' => 'Dieser Kontakt ist bereits als Kontakt dieses Typs definiert.',
		'ErrorCashAccountAcceptsOnlyCashMoney' => 'Dies ist ein Bargeldkonto (Kassa) und akzeptiert deshalb nur Bargeldtransaktionen.',
		'ErrorFromToAccountsMustDiffers' => 'Quell- und Zielbankkonto müssen unterschiedlich sein.',
		'ErrorBadThirdPartyName' => 'Der für den Partner eingegebene Name ist ungültig.',
		'ErrorBadCustomerCodeSyntax' => 'Die eingegebene Kundennummer ist unzulässig.',
		'ErrorCustomerCodeRequired' => 'Kunden Nr. erforderlich',
		'ErrorCustomerCodeAlreadyUsed' => 'Diese Kunden Nr. ist bereits vergeben.',
		'ErrorPrefixRequired' => 'Präfix erforderlich',
		'ErrorUrlNotValid' => 'Die angegebene Website-Adresse ist ungültig',
		'ErrorBadSupplierCodeSyntax' => 'Die eingegebene Lieferanten Nr. ist unzulässig.',
		'ErrorSupplierCodeRequired' => 'Lieferanten Nr. erforderlich',
		'ErrorSupplierCodeAlreadyUsed' => 'Diese Lieferanten Nr. ist bereits vergeben.',
		'ErrorBadParameters' => 'Ungültige Werte',
		'ErrorBadValueForParameter' => 'Wrong value \'%s\' for parameter incorrect \'%s\'',
		'ErrorBadImageFormat' => 'Image file has not a supported format',
		'ErrorBadDateFormat' => 'Value \'%s\' has wrong date format',
		'ErrorFailedToWriteInDir' => 'Fehler beim Schreiben in das Verzeichnis %s',
		'ErrorFoundBadEmailInFile' => 'Ungültige E-Mail-Adresse in %s Zeilen der Datei gefunden (z.B. Zeile %s mit E-Mail=%s)',
		'ErrorUserCannotBeDelete' => 'Dieser Benutzer kann nicht gelöscht werden. Eventuell ist er noch mit einem Partner verknüpft.',
		'ErrorFieldsRequired' => 'Ein oder mehrere erforderliche Felder wurden nicht ausgefüllt-',
		'ErrorFailedToCreateDir' => 'Fehler beim Erstellen eines Verzeichnisses. Vergewissern Sie sich, dass der Webserver-Benutzer Schreibberechtigungen für das Dokumentverzeichnis des Systems besitzt. Bei aktiviertem <b>safe_mode</b> sollten die Systemdateien den Webserver-Benutzer oder die -Gruppe als Besitzer haben.',
		'ErrorNoMailDefinedForThisUser' => 'Für diesen Benutzer ist keine E-Mail-Adresse eingetragen.',
		'ErrorFeatureNeedJavascript' => 'Diese Funktion erfordert aktiviertes JavaScript. Sie können dies unter Einstellungen-Anzeige ändern.',
		'ErrorTopMenuMustHaveAParentWithId0' => 'Ein Menü vom Typ \'Top\' kann kein Eltern-Menü sein. Setzen Sie 0 als Eltern-Menü oder wählen Sie ein Menü vom Typ \'Links\'.',
		'ErrorLeftMenuMustHaveAParentId' => 'Ein Menü vom Typ \'Links\' erfordert einen Eltern-Menü ID.',
		'ErrorFileNotFound' => 'Datei \'<b>%s</b>\' konnte nicht gefunden werden (Ungültiger Pfad, falsche Berechtigungen oder der Zugriff wurde durch safemode- oder openbasedir-Parameter eingeschränkt)',
		'ErrorDirNotFound' => 'Verzeichnis <b>%s</b> konnte nicht gefunden werden (Ungültiger Pfad, falsche Berechtigungen oder Zugriff durch safemode- oder openbasedir-Parameter eingeschränkte)',
		'ErrorFunctionNotAvailableInPHP' => 'Die PHP-Funktion <b>%s</b> ist für diese Funktion erforderlich, in dieser PHP-Konfiguration jedoch nicht verfügbar.',
		'ErrorDirAlreadyExists' => 'Ein Verzeichnis mit diesem Namen existiert bereits.',
		'ErrorFileAlreadyExists' => 'Eine Datei mit diesem Namen existiert bereits.',
		'ErrorPartialFile' => 'Die Datei wurde nicht vollständig zum Server übertragen.',
		'ErrorNoTmpDir' => 'Das temporäre Verzeichnis %s existiert nicht.',
		'ErrorUploadBlockedByAddon' => 'Der Upload wurde durch ein PHP Apache-Plugin blockiert.',
		'ErrorFileSizeTooLarge' => 'Die Größe der gewählten Datei übersteigt den zulässigen Maximalwert.',
		'ErrorSizeTooLongForIntType' => 'Size too long for int type (%s digits maximum)',
		'ErrorSizeTooLongForVarcharType' => 'Size too long for string type (%s chars maximum)',
		'ErrorFieldCanNotContainSpecialCharacters' => 'Das Feld <b>%s</b> darf keine Sonderzeichen enthalten.',
		'ErrorNoAccountancyModuleLoaded' => 'Kein Buchhaltungsmodul aktiviert',
		'ErrorExportDuplicateProfil' => 'Dieses Exportprofil existiert bereits.',
		'ErrorLDAPSetupNotComplete' => 'Der LDAP-Abgleich für dieses System ist nicht vollständig eingerichtet.',
		'ErrorLDAPMakeManualTest' => 'Eine .ldif-Datei wurde im Verzeichnis %s erstellt. Laden Sie diese Datei von der Kommandozeile aus um mehr Informationen über Fehler zu erhalten.',
		'ErrorCantSaveADoneUserWithZeroPercentage' => 'Maßnahmen können nicht mit Status "Nicht begonnen" gespeichert werden, wenn das Feld "Erledigt durch" ausgefüllt ist.',
		'ErrorRefAlreadyExists' => 'Die Nr. für den Erstellungsvorgang ist bereits vergeben',
		'ErrorPleaseTypeBankTransactionReportName' => 'Bitte geben Sie den Bankbeleg zu dieser Transaktion ein (Format MMYYYY oder TTMMYYYY)',
		'ErrorRecordHasChildren' => 'Kann diesen Eintrag nicht löschen da er noch über Kindelemente verfügt.',
		'ErrorModuleRequireJavascript' => 'Diese Funktion erfordert aktiviertes JavaScript. Aktivieren/deaktivieren können Sie Javascript im Menü Übersicht(Home)-> Einstellungen->Anzeige.',
		'ErrorPasswordsMustMatch' => 'Die eingegebenen Passwörter müssen identisch sein.',
		'ErrorContactEMail' => 'Ein technischer Fehler ist aufgetreten. Bitte kontaktieren Sie Ihren Administrator unter der folgenden E-Mail-Adresse <b>%s</b> und fügen Sie den Fehlercode <b>%s</b> in Ihrer Nachricht ein, oder (noch besser) fügen Sie einen Screenshot dieser Seite als Anhang bei.',
		'ErrorWrongValueForField' => 'Falscher Wert für Feld Nr. <b>%s</b> (Wert \'<b>%s</b>\' passt nicht zur Regex-Regel <b>%s</b>)',
		'ErrorFieldValueNotIn' => 'Wrong value for field number <b>%s</b> (value \'<b>%s</b>\' is not a value available into field <b>%s</b> of table <b>%s</b>)',
		'ErrorFieldRefNotIn' => 'Wrong value for field number <b>%s</b> (value \'<b>%s</b>\' is not a <b>%s</b> existing ref)',
		'ErrorsOnXLines' => 'Fehler in <b>%s</b> Quellzeilen',
		'ErrorFileIsInfectedWithAVirus' => 'Der Virenschutz konnte diese Datei nicht freigeben (eventuell ist diese mit einem Virus infiziert)',
		'ErrorSpecialCharNotAllowedForField' => 'Sonderzeichen sind im Feld \'%s\' nicht erlaubt',
		'ErrorDatabaseParameterWrong' => 'Der Datenbankeinstellungs-Parameter \'<b>%s</b>\' weist einen mit dem System inkompatiblen Wert auf (erfordert den Wert \'<b>%s</b>\').',
		'ErrorNumRefModel' => 'Es besteht ein Bezug zur Datenbank (%s) der mit dieser Numerierungsfolge nicht kompatibel ist. Entfernen Sie den Eintrag oder benennen Sie den Verweis um, um dieses Modul zu aktivieren.',
		'ErrorQtyTooLowForThisSupplier' => 'Die gewählte Menge liegt unterhalb der Mindestbestellmenge für diesen Lieferanten oder es wurde kein Lieferantenpreis zu diesem Anbieter eingetragen.',
		'ErrorModuleSetupNotComplete' => 'Setup of module looks to be uncomplete. Go on Setup - Modules to complete.',
		'ErrorBadMask' => 'Error on mask',
		'ErrorBadMaskFailedToLocatePosOfSequence' => 'Error, mask without sequence number',
		'ErrorBadMaskBadRazMonth' => 'Error, bad reset value',
		'ErrorSelectAtLeastOne' => 'Error. Select at least one entry.',
		'ErrorProductWithRefNotExist' => 'Product with reference \'<i>%s</i>\' don\'t exist',
		'ErrorDeleteNotPossibleLineIsConsolidated' => 'Delete not possible because record is linked to a bank transation that is conciliated',
		'ErrorProdIdAlreadyExist' => '%s is assigned to another third',
		'ErrorFailedToSendPassword' => 'Fehler beim Zusenden des Passworts',
		'ErrorFailedToLoadRSSFile' => 'Fails to get RSS feed. Try to add constant MAIN_SIMPLEXMLLOAD_DEBUG if error messages does not provide enough information.',
		'ErrorPasswordDiffers' => 'Passwörter stimmen nicht überein, bitte erneut eingeben.',
		'ErrorForbidden' => 'Kein Zugriff. <br>Für einen Zugriff zu diese Seite oder Funktion müssen Sie über eine Sitzung authentifiziert zu sein und über die entsprechenden Benutzerberechtigungen verfügen.',
		'ErrorForbidden2' => 'Die Zugriffsberechtigungen für diese Anmeldung kann Ihr Administrator unter %s->%s einstellen.',
		'ErrorForbidden3' => 'Es scheint keine ordnungsgemäße Authentifizierung für das System vorzuliegen. Bitte werfen Sie einen Blick auf die Systemdokumentation um die entsprechenden Authentifizierungsoptionen zu verwalten (htaccess, mod_auth oder andere...)',
		'ErrorNoImagickReadimage' => 'Imagick_readimage Funktion in dieser PHP-Version nicht vorhanden. Vorschaubilder sind nicht möglich. Administratoren können diese Registerkarte unter Einstellungen-Display ausblenden.',
		'ErrorRecordAlreadyExists' => 'Datensatz bereits vorhanden',
		'ErrorCantReadFile' => 'Fehler beim Lesen der Datei \'%s\'',
		'ErrorCantReadDir' => 'Fehler beim Lesen des Verzeichnisses \'%s\'',
		'ErrorFailedToFindEntity' => 'Fehler beim Lesen der Entität \'%s\'',
		'ErrorBadLoginPassword' => 'Benutzername oder Passwort falsch',
		'ErrorLoginDisabled' => 'Ihr Konto wurde deaktiviert',
		'ErrorFailedToRunExternalCommand' => 'Fehler beim Ausführen des externen Befehls. Überprüfen Sie dessen Verfügbarkeit und Ausführbarkeit durch den PHP-Server. Sollte der <b>PHP Safe Mode</b> aktiviert sein, stellen Sie sicher dass der Befehl in einem der <b>safe_mode_exec_dir</b>-Verzeichnisse ausgeführt wird.',
		'ErrorFailedToChangePassword' => 'Passwortänderung fehlgeschlagen',
		'ErrorLoginDoesNotExists' => 'Benutzer mit Anmeldung <b>%s</b> konnte nicht gefunden werden.',
		'ErrorLoginHasNoEmail' => 'Dieser Benutzer hat keine E-Mail-Adresse. Prozess abgebrochen.',
		'ErrorBadValueForCode' => 'Unzulässiger Code-Wert. Versuchen Sie es mit einem anderen Wert erneut...',
		'ErrorBothFieldCantBeNegative' => 'Fields %s and %s can\'t be both negative',
		'ErrorWebServerUserHasNotPermission' => 'User account <b>%s</b> used to execute web server has no permission for that',
		'ErrorNoActivatedBarcode' => 'No barcode type activated',
		'ErrUnzipFails' => 'Failed to unzip %s with ZipArchive',
		'ErrNoZipEngine' => 'No engine to unzip %s file in this PHP',
		'ErrorFileMustBeASpeedealingPackage' => 'The file %s must be a Speedealing zip package',
		'ErrorFileRequired' => 'It takes a package Speedealing file',
		'ErrorPhpCurlNotInstalled' => 'The PHP CURL is not installed, this is essential to talk with Paypal',
		'ErrorFailedToAddToMailmanList' => 'Failed to add record to Mailman list or SPIP base',
		'ErrorNewVaueCantMatchOldValue' => 'New value can\'t be equal to old one',
		'ErrorDuplicateTrigger' => 'Un fichier trigger de classe \'<b>%s</b>\' est présent plusieurs fois. Supprimer le doublon du répertoire \'<b>%s</b>\'.',
		'SESSIONEXPIRE' => 'La session est expirée',
		// Warnings
		'WarningMandatorySetupNotComplete' => 'Mandatory setup parameters are not yet defined',
		'WarningSafeModeOnCheckExecDir' => 'Achtung: Der PHP-Option <b>safe_mode</b> ist aktiviert, entsprechend müssen Befehle in einem mit <b>safe_mode_exec_dir</b> gekennzeichneten Verzeichnis ausgeführt werden.',
		'WarningAllowUrlFopenMustBeOn' => 'Der Parameter <b>allow_url_fopen</b> muss in der php.ini-Datei auf <b>ON</b> stehen, damit dieses Modul funktioniert. Bitte passen Sie die Datei manuell an.',
		'WarningBuildScriptNotRunned' => 'Das Skript <b>%s</b> wurde noch nicht zur Grafikerstellung ausgeführt oder es existieren keine anzuzeigenden Daten.',
		'WarningBookmarkAlreadyExists' => 'Ein Lesezeichen mit diesem Titel oder Ziel (URL) existiert bereits.',
		'WarningPassIsEmpty' => 'Warnung: Derzeit ist kein Datenbankpasswort gesetzt. Dies ist eine Sicherheitslücke. Konfigurieren Sie ehestmöglich ein Passwort für den Datenbankzugriff und passen Sie Ihre conf.php entsprechend an.',
		'WarningConfFileMustBeReadOnly' => 'Achtung: Die Konfigurationsdatei (<b>htdocs/conf/conf.php</b>) kann von Ihrem Webserver überschrieben werden. Dies ist eine ernstzunehmende Sicherheitslücke. Ändern Sie den Zugriff schnellstmöglich auf reinen Lesezugriff. Wenn Sie Windows und das FAT-Format für Ihre Festplatte nutzen, seien Sie sich bitte bewusst dass dieses Format keine individuellen Dateiberechtigungen unterstützt und so auch nicht völlig sicher ist,',
		'WarningsOnXLines' => 'Warnhinweise in <b>%s</b> Quellzeilen',
		'WarningNoDocumentModelActivated' => 'Für das Erstellen von Dokumenten ist keine Vorlage gewählt. Eine Vorlage wird standardmäßig ausgewählt, bis Sie die Moduleinstellungen angepasst haben.',
		'WarningLockFileDoesNotExists' => 'Warning, once setup is finished, you must disable install/migrate tools by adding a file <b>install.lock</b> into directory <b>%s</b>. Missing this file is a security hole.',
		'WarningUntilDirRemoved' => 'Diese Warnung bleibt so lange aktiv, wie dieses Verzeichnis existiert (nur für Administratoren).',
		'WarningCloseAlways' => 'Warning, closing is done even if amount differs between source and target elements. Enable this feature with caution.'
);
?>