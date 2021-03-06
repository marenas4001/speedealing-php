<?php
/* Copyright (C) 2012-2013	Regis Houssin	<regis.houssin@capnetworks.com>
 * Copyright (C) 2012-2013	Herve Prot		<herve.prot@symeos.com>
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

$orders = array(
		'CHARSET' => 'UTF-8',
		'OrdersArea' => 'Kunder ordrer område',
		'SuppliersOrdersArea' => 'Leverandører ordrer område',
		'OrderCard' => 'Bestil kort',
		'OrderId' => 'Order Id',
		'Order' => 'Rækkefølge',
		'Orders' => 'Ordrer',
		'OrderLine' => 'Bestil online',
		'OrderLines' => 'Order lines',
		'OrderFollow' => 'Opfølgning',
		'OrderDate' => 'Bestil dato',
		'OrderToProcess' => 'For at kunne behandle',
		'NewOrder' => 'Ny ordre',
		'ToOrder' => 'Foretag orden',
		'MakeOrder' => 'Foretag orden',
		'SupplierOrder' => 'Leverandør orden',
		'SuppliersOrders' => 'Suppliers\' ordrer',
		'SuppliersOrdersRunning' => 'Nuværende leverandører ordrer',
		'CustomerOrder' => 'Kunden for',
		'CustomersOrders' => 'Kundernes ordrer',
		'CustomersOrdersRunning' => 'Nuværende kundernes ordrer',
		'CustomersOrdersAndOrdersLines' => 'Kundens ordrer og kendelser \'linjer',
		'OrdersToValid' => 'Ordrer på gyldige',
		'OrdersToBill' => 'Ordrer til lovforslag',
		'OrdersInProcess' => 'Ordrer i processen',
		'OrdersToProcess' => 'Ordrer til processen',
		'SuppliersOrdersToProcess' => 'Leverandørens ordre om at behandle',
		'StatusOrderCanceledShort' => 'Annulleret',
		'StatusOrderDraftShort' => 'Udkast',
		'StatusOrderValidatedShort' => 'Valideret',
		'StatusOrderSentShort' => 'I proces',
		'StatusOrderSent' => 'Shipment in process',
		'StatusOrderOnProcessShort' => 'Den proces',
		'StatusOrderProcessedShort' => 'Forarbejdede',
		'StatusOrderToBillShort' => 'Til lovforslag',
		'StatusOrderToBill2Short' => 'To bill',
		'StatusOrderApprovedShort' => 'Godkendt',
		'StatusOrderRefusedShort' => 'Afviste',
		'StatusOrderToProcessShort' => 'Til at behandle',
		'StatusOrderReceivedPartiallyShort' => 'Delvist modtaget',
		'StatusOrderReceivedAllShort' => 'Alt modtaget',
		'StatusOrderCanceled' => 'Annulleret',
		'StatusOrderDraft' => 'Udkast (skal valideres)',
		'StatusOrderNeedQuotes' => 'Draft (needs manual quotes)',
		'StatusOrderNew' => 'New order (needs to be validated)',
		'StatusOrderProcessing' => 'Processing',
		'StatusOrderValidated' => 'Valideret',
		'StatusOrderOnProcess' => 'Den proces',
		'StatusOrderSending' => 'Sending',
		'StatusOrderClosed' => 'Closed (Shipped)',
		'StatusOrderToBill' => 'Til lovforslag',
		'StatusOrderToBill2' => 'To bill',
		'StatusOrderApproved' => 'Godkendt',
		'StatusOrderRefused' => 'Afviste',
		'StatusOrderError' => 'Error',
		'StatusOrderReceivedPartially' => 'Delvist modtaget',
		'StatusOrderReceivedAll' => 'Alt modtaget',
		'ShippingExist' => 'En forsendelse eksisterer',
		'DraftOrWaitingApproved' => 'Udkast til eller godkendt endnu ikke bestilt',
		'DraftOrWaitingShipped' => 'Udkast til eller valideres endnu ikke afsendt',
		'MenuOrdersToBill' => 'Ordrer til lovforslag',
		'MenuOrdersToBill2' => 'Orders to bill',
		'SearchOrder' => 'Search for',
		'Sending' => 'Sender',
		'Sendings' => 'Sendings',
		'ShipProduct' => 'Skib produkt',
		'Discount' => 'Discount',
		'CreateOrder' => 'Opret Order',
		'RefuseOrder' => 'Nægte at',
		'ApproveOrder' => 'Acceptere for',
		'ValidateOrder' => 'Valider orden',
		'UnvalidateOrder' => 'Unvalidate rækkefølge',
		'DeleteOrder' => 'Slet orden',
		'CancelOrder' => 'Annuller ordre',
		'AddOrder' => 'Tilføj orden',
		'AddToMyOrders' => 'Føj til mine ordrer',
		'AddToOtherOrders' => 'Føj til andre ordrer',
		'ShowOrder' => 'Vis for',
		'NoOpenedOrders' => 'Nr. åbnet ordrer',
		'NoOtherOpenedOrders' => 'Ingen andre åbnet ordrer',
		'OtherOrders' => 'Andre kendelser',
		'LastOrders' => 'Seneste %s ordrer',
		'LastModifiedOrders' => 'Seneste %s modificerede ordrer',
		'LastClosedOrders' => 'Seneste %s lukkede ordrer',
		'AllOrders' => 'Alle ordrer',
		'NbOfOrders' => 'Antal ordrer',
		'OrdersStatistics' => 'Orders »statistik',
		'OrdersStatisticsSuppliers' => 'Leverandør ordrer «statistik',
		'NumberOfOrdersByMonth' => 'Antallet af ordrer efter måned',
		'AmountOfOrdersByMonthHT' => 'størrelsen af ordrer af måneden (efter skat)',
		'ListOfOrders' => 'Liste af ordrer',
		'CloseOrder' => 'Luk for',
		'ConfirmCloseOrder' => 'Er du sikker på du ønsker at lukke denne ordre? Når en ordre er afsluttet, kan den kun blive faktureret.',
		'ConfirmCloseOrderIfSending' => 'Er du sikker på du ønsker at lukke denne ordre? Du skal lukke en ordre kun, når alle shipping er færdig.',
		'ConfirmDeleteOrder' => 'Er du sikker på du vil slette denne ordre?',
		'ConfirmValidateOrder' => 'Er du sikker på at du ønsker at validere denne ordre under <b>navnet %s?</b>',
		'ConfirmUnvalidateOrder' => 'Er du sikker på du vil genoprette ro og orden <b>%s</b> at udarbejde status?',
		'ConfirmCancelOrder' => 'Er du sikker på du vil annullere denne ordre?',
		'ConfirmMakeOrder' => 'Er du sikker på du vil bekræfte, du har foretaget denne ordre <b>på %s?</b>',
		'GenerateBill' => 'Generer faktura',
		'ClassifyShipped' => 'Classify delivered',
		'ClassifyBilled' => 'Klassificere "Billed"',
		'ComptaCard' => 'Regnskabsmæssig kortet',
		'DraftOrders' => 'Udkast til ordrer',
		'RelatedOrders' => 'Relaterede ordrer',
		'OnProcessOrders' => 'Den proces ordrer',
		'RefOrder' => 'Ref. rækkefølge',
		'RefCustomerOrder' => 'Ref. kunde for',
		'CustomerOrder' => 'Kunden for',
		'RefCustomerOrderShort' => 'Ref. kunde. rækkefølge',
		'SendOrderByMail' => 'Send ordre ved mail',
		'ActionsOnOrder' => 'Aktioner på bestilling',
		'NoArticleOfTypeProduct' => 'Nr. artiklen af type \'produkt\', så ingen shippable artikelnummer for denne ordre',
		'OrderMode' => 'Bestil metode',
		'AuthorRequest' => 'Anmodning forfatter',
		'UseCustomerContactAsOrderRecipientIfExist' => 'Brug kunde kontakt adresse, hvis defineret i stedet for tredjepart adresse som for modtagerens adresse',
		'RunningOrders' => 'Ordrer på processen',
		'UserWithApproveOrderGrant' => 'Useres ydes med "godkende ordrer" tilladelse.',
		'PaymentOrderRef' => 'Betaling af for %s',
		'CloneOrder' => 'Klon orden',
		'ConfirmCloneOrder' => 'Er du sikker på at du vil klone denne <b>ordre %s?</b>',
		'DispatchSupplierOrder' => 'Modtagelse leverandør for %s',
		'DateDeliveryPlanned' => 'Date de livraison prévue',
		'SetDemandReason' => 'Définir l\'origine de la commande',
		////////// Types de contacts //////////
		'TypeContact_commande_internal_SALESREPFOLL' => 'Repræsentant opfølgning kundeordre',
		'TypeContact_commande_internal_SHIPPING' => 'Repræsentant opfølgning shipping',
		'TypeContact_commande_external_BILLING' => 'Kundefaktura kontakt',
		'TypeContact_commande_external_SHIPPING' => 'Kunde shipping kontakt',
		'TypeContact_commande_external_CUSTOMER' => 'Kundekontakt følgende retskendelse',
		'TypeContact_order_supplier_internal_SALESREPFOLL' => 'Repræsentant opfølgning leverandør for',
		'TypeContact_order_supplier_internal_SHIPPING' => 'Repræsentant opfølgning shipping',
		'TypeContact_order_supplier_external_BILLING' => 'Leverandør faktura kontakt',
		'TypeContact_order_supplier_external_SHIPPING' => 'Leverandør shipping kontakt',
		'TypeContact_order_supplier_external_CUSTOMER' => 'Leverandør kontakt efter retskendelse',
		'Error_COMMANDE_SUPPLIER_ADDON_NotDefined' => 'Konstant COMMANDE_SUPPLIER_ADDON ikke defineret',
		'Error_COMMANDE_ADDON_NotDefined' => 'Konstant COMMANDE_ADDON ikke defineret',
		'Error_FailedToLoad_COMMANDE_SUPPLIER_ADDON_File' => 'Det lykkedes ikke at indlæse modulet fil \' %s\'',
		'Error_FailedToLoad_COMMANDE_ADDON_File' => 'Det lykkedes ikke at indlæse modulet fil \' %s\'',
		'Error_OrderNotChecked' => 'No orders to invoice selected',
		// Sources
		'OrderSource0' => 'Kommerciel forslag',
		'OrderSource1' => 'Internet',
		'OrderSource2' => 'Mail-kampagne',
		'OrderSource3' => 'Telefon compain',
		'OrderSource4' => 'Fax kampagne',
		'OrderSource5' => 'Kommerciel',
		'OrderSource6' => 'Opbevare',
		'QtyOrdered' => 'Qty bestilt',
		'AddDeliveryCostLine' => 'Tilføj en leveringsrapport omkostninger linje angiver vægten af den rækkefølge',
		// Documents models
		'PDFEinsteinDescription' => 'En fuldstændig orden model (logo. ..)',
		'PDFEdisonDescription' => 'En simpel orden model',
		// Orders modes
		'OrderByMail' => 'Mail',
		'OrderByFax' => 'Fax',
		'OrderByEMail' => 'EMail',
		'OrderByWWW' => 'Online',
		'OrderByPhone' => 'Telefon',
		'CreateInvoiceForThisCustomer' => 'Bill orders',
		'NoOrdersToInvoice' => 'No orders billable',
		'CloseProcessedOrdersAutomatically' => 'Classify "Processed" all selected orders.',
		'MenuOrdersToBill2' => 'Orders to bill',
		'LinkedInvoices' => 'Linked invoices',
		'LinkedProposals' => 'Linked proposals',
		'ShippingHT' => 'Shipping cost'
);
?>