<form id="redirectForm" method="post" action="<?php echo plugin_dir_url( __DIR__ ).'template/request.php'; ?>">
<input class="form-control" name="appId" value="178175434862850002ff7e7f0a571871"/>
<input class="form-control" name="orderId" value="<?php echo "CFB_" . time(); ?>"/>
<input class="form-control" name="orderAmount" value="123"/>
<input class="form-control" name="orderCurrency" value="INR"/>
<input class="form-control" name="orderNote" value="orderNote"/>
<input class="form-control" name="customerName" value="Customer name"/>
<input class="form-control" name="customerEmail" value="email@gmail.com"/>
<input class="form-control" name="customerPhone" value="123456789"/>
<input class="form-control" name="returnUrl" value="https://www.mountainhomestays.com/success-page"/>
<input class="form-control" name="notifyUrl" value="https://www.mountainhomestays.com/success-page"/>
<button type="submit" class="btn btn-primary btn-block" value="Pay">Submit</button>
</form>