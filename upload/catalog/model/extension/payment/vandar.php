<?php 
class ModelExtensionPaymentvandar extends Model {
  	public function getMethod($address) {
		$this->load->language('extension/payment/vandar');

		if ($this->config->get('payment_vandar_status')) {
      		$status = true;
      	} else {
			$status = false;
		}

		$method_data = array();
		
		if ($status) {
      		$method_data = array( 
        		'code'       => 'vandar',
        		'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_vandar_sort_order')
      		);
    	}
		
    	return $method_data;
  	}
}
?>