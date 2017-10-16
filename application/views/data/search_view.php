<table>
<tr><th>Name</th><th>Address</th><th>Phone Number</th><th>Email</th><th>Description</th></tr>
<?php foreach($result as $item):
$this->load->model('Member_model');
?>
<tr>
<td><?= $item->member_name ?></td>
<td><?= $item->member_address ?></td>
<td><?= $item->member_phonenumber ?></td>
<td><?= $item->member_email ?></td>
<td><?= $item->member_description ?></td>
</tr>
<?php endforeach;?>
</table>