<?php 
class PaypalIpnSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $instant_payment_notifications = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'notify_version' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'IPN Version Number', 'charset' => 'latin1'),
		'verify_sign' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Encrypted string used to verify the authenticityof the tansaction', 'charset' => 'latin1'),
		'test_ipn' => array('type' => 'integer', 'null' => true, 'default' => null),
		'address_city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => 'City of customers address', 'charset' => 'latin1'),
		'address_country' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'Country of customers address', 'charset' => 'latin1'),
		'address_country_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => 'Two character ISO 3166 country code', 'charset' => 'latin1'),
		'address_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'comment' => 'Name used with address (included when customer provides a Gift address)', 'charset' => 'latin1'),
		'address_state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'comment' => 'State of customer address', 'charset' => 'latin1'),
		'address_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'confirmed/unconfirmed', 'charset' => 'latin1'),
		'address_street' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s street address', 'charset' => 'latin1'),
		'address_zip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Zip code of customer\'s address', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s first name', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s last name', 'charset' => 'latin1'),
		'payer_business_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s company name, if customer represents a business', 'charset' => 'latin1'),
		'payer_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s primary email address. Use this email to provide any credits', 'charset' => 'latin1'),
		'payer_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'comment' => 'Unique customer ID.', 'charset' => 'latin1'),
		'payer_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'verified/unverified', 'charset' => 'latin1'),
		'contact_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Customer\'s telephone number.', 'charset' => 'latin1'),
		'residence_country' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'comment' => 'Two-Character ISO 3166 country code', 'charset' => 'latin1'),
		'business' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Email address or account ID of the payment recipient (that is, the merchant). Equivalent to the values of receiver_email (If payment is sent to primary account) and business set in the Website Payment HTML.', 'charset' => 'latin1'),
		'item_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Item name as passed by you, the merchant. Or, if not passed by you, as entered by your customer. If this is a shopping cart transaction, Paypal will append the number of the item (e.g., item_name_1,item_name_2, and so forth).', 'charset' => 'latin1'),
		'item_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Pass-through variable for you to track purchases. It will get passed back to you at the completion of the payment. If omitted, no variable will be passed back to you.', 'charset' => 'latin1'),
		'quantity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Quantity as entered by your customer or as passed by you, the merchant. If this is a shopping cart transaction, PayPal appends the number of the item (e.g., quantity1,quantity2).', 'charset' => 'latin1'),
		'item_name1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'item_number1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quantity1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'receiver_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Primary email address of the payment recipient (that is, the merchant). If the payment is sent to a non-primary email address on your PayPal account, the receiver_email is still your primary email.', 'charset' => 'latin1'),
		'receiver_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'latin1_swedish_ci', 'comment' => 'Unique account ID of the payment recipient (i.e., the merchant). This is the same as the recipients referral ID.', 'charset' => 'latin1'),
		'custom' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Custom value as passed by you, the merchant. These are pass-through variables that are never presented to your customer.', 'charset' => 'latin1'),
		'invoice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'comment' => 'Pass through variable you can use to identify your invoice number for this purchase. If omitted, no variable is passed back.', 'charset' => 'latin1'),
		'memo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Memo as entered by your customer in PayPal Website Payments note field.', 'charset' => 'latin1'),
		'option_name_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'Option name 1 as requested by you', 'charset' => 'latin1'),
		'option_name_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'Option 2 name as requested by you', 'charset' => 'latin1'),
		'option_selection1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Option 1 choice as entered by your customer', 'charset' => 'latin1'),
		'option_selection2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => 'Option 2 choice as entered by your customer', 'charset' => 'latin1'),
		'tax' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of tax charged on payment'),
		'auth_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'latin1_swedish_ci', 'comment' => 'Authorization identification number', 'charset' => 'latin1'),
		'auth_exp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Authorization expiration date and time, in the following format: HH:MM:SS DD Mmm YY, YYYY PST', 'charset' => 'latin1'),
		'auth_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Authorization amount'),
		'auth_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Status of authorization', 'charset' => 'latin1'),
		'num_cart_items' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'If this is a PayPal shopping cart transaction, number of items in the cart'),
		'parent_txn_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'latin1_swedish_ci', 'comment' => 'In the case of a refund, reversal, or cancelled reversal, this variable contains the txn_id of the original transaction, while txn_id contains a new ID for the new transaction.', 'charset' => 'latin1'),
		'payment_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Time/date stamp generated by PayPal, in the following format: HH:MM:SS DD Mmm YY, YYYY PST', 'charset' => 'latin1'),
		'payment_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Payment status of the payment', 'charset' => 'latin1'),
		'payment_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'comment' => 'echeck/instant', 'charset' => 'latin1'),
		'pending_reason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'This variable is only set if payment_status=pending', 'charset' => 'latin1'),
		'reason_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'This variable is only set if payment_status=reversed', 'charset' => 'latin1'),
		'remaining_settle' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Remaining amount that can be captured with Authorization and Capture'),
		'shipping_method' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'The name of a shipping method from the shipping calculations section of the merchants account profile. The buyer selected the named shipping method for this transaction', 'charset' => 'latin1'),
		'shipping' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Shipping charges associated with this transaction. Format unsigned, no currency symbol, two decimal places'),
		'transaction_entity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'Authorization and capture transaction entity', 'charset' => 'latin1'),
		'txn_id' => array('type' => 'string', 'null' => true, 'length' => 19, 'collate' => 'latin1_swedish_ci', 'comment' => 'A unique transaction ID generated by PayPal', 'charset' => 'latin1'),
		'txn_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => 'cart/express_checkout/send-money/virtual-terminal/web-accept', 'charset' => 'latin1'),
		'exchange_rate' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Exchange rate used if a currency conversion occured'),
		'mc_currency' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => 'Three character country code. For payment IPN notifications, this is the currency of the payment, for non-payment subscription IPN notifications, this is the currency of the subscription.', 'charset' => 'latin1'),
		'mc_fee' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Transaction fee associated with the payment, mc_gross minus mc_fee equals the amount deposited into the receiver_email account. Equivalent to payment_fee for USD payments. If this amount is negative, it signifies a refund or reversal, and either ofthose p'),
		'mc_gross' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Full amount of the customer\'s payment'),
		'mc_handling' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Total handling charge associated with the transaction'),
		'mc_shipping' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Total shipping amount associated with the transaction'),
		'payment_fee' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'USD transaction fee associated with the payment'),
		'payment_gross' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Full USD amount of the customers payment transaction, before payment_fee is subtracted'),
		'settle_amount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount that is deposited into the account\'s primary balance after a currency conversion'),
		'settle_currency' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => 'Currency of settle amount. Three digit currency code', 'charset' => 'latin1'),
		'auction_buyer_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => 'The customer\'s auction ID.', 'charset' => 'latin1'),
		'auction_closing_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'The auction\'s close date. In the format: HH:MM:SS DD Mmm YY, YYYY PSD', 'charset' => 'latin1'),
		'auction_multi_item' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'The number of items purchased in multi-item auction payments'),
		'for_auction' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'comment' => 'This is an auction payment - payments made using Pay for eBay Items or Smart Logos - as well as send money/money request payments with the type eBay items or Auction Goods(non-eBay)', 'charset' => 'latin1'),
		'subscr_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Start date or cancellation date depending on whether txn_type is subcr_signup or subscr_cancel', 'charset' => 'latin1'),
		'subscr_effective' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date when a subscription modification becomes effective', 'charset' => 'latin1'),
		'period1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'comment' => '(Optional) Trial subscription interval in days, weeks, months, years (example a 4 day interval is 4 D', 'charset' => 'latin1'),
		'period2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'comment' => '(Optional) Trial period', 'charset' => 'latin1'),
		'period3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'comment' => 'Regular subscription interval in days, weeks, months, years', 'charset' => 'latin1'),
		'amount1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for Trial period 1 for USD'),
		'amount2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for Trial period 2 for USD'),
		'amount3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for regular subscription  period 1 for USD'),
		'mc_amount1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for trial period 1 regardless of currency'),
		'mc_amount2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for trial period 2 regardless of currency'),
		'mc_amount3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => 'Amount of payment for regular subscription period regardless of currency'),
		'recurring' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indicates whether rate recurs (1 is yes, blank is no)', 'charset' => 'latin1'),
		'reattempt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'Indicates whether reattempts should occur on payment failure (1 is yes, blank is no)', 'charset' => 'latin1'),
		'retry_at' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date PayPal will retry a failed subscription payment', 'charset' => 'latin1'),
		'recur_times' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'The number of payment installations that will occur at the regular rate'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '(Optional) Username generated by PayPal and given to subscriber to access the subscription', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'latin1_swedish_ci', 'comment' => '(Optional) Password generated by PayPal and given to subscriber to access the subscription (Encrypted)', 'charset' => 'latin1'),
		'subscr_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'latin1_swedish_ci', 'comment' => 'ID generated by PayPal for the subscriber', 'charset' => 'latin1'),
		'case_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Case identification number', 'charset' => 'latin1'),
		'case_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'complaint/chargeback', 'charset' => 'latin1'),
		'case_creation_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 28, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date/Time the case was registered', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	public $paypal_items = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'instant_payment_notification_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'item_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'item_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quantity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 127, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mc_gross' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'mc_shipping' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'mc_handling' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'tax' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

}
