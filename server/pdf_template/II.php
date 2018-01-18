
<div class="page page--two page-break-after">

	<div class="[ _1 ] align--center">
		<h1 class="heading--primary">Pricing for <span class="color--strong"><?= $apt_info[ "#number" ] ?></span></h1>
		<p class="space-line--m text--m text--thin text--subdued"><span class="text--bold"><?= $apt_info[ "#size" ] ?></span> on the <span class="text--bold"><?= $apt_info[ "#floor" ] ?> Floor</span></p>
		<p class="space-line--m text--m text--thin text--subdued">Super Built-up Area - <span class="text--bold"><?= $apt_info[ "#area" ] ?> sft</span></p>
		<!-- <p class="space-line--m text--m text--thin text--subdued">Rate per sft - <span class="text--bold"><span class="symbol--inr"> <?php // echo $apt_info[ "#rate_per_sqft" ] ?></span></span></p> -->
	</div>

	<table class="span--full apartment-info">
		<tbody>
			<tr>
				<th class="span--3by4 align--left text--thin text--normal apartment-detail">
					Basic Cost
				</th>
				<td class="span--quarter align--right text--thin text--normal apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#basic_cost" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Exclusive Car Park Rights for <?= $apt_info[ "#car_parking_text" ] ?>
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#car_parking" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Floor Rise (at <span class="symbol--inr">₹ </span><?= $apt_info[ "#floor_rise_cost" ] ?>/- psft)
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#floor_rise" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Club Membership
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#clubhouse" ] ?></span>
				</td>
			</tr>
		</tbody>
	</table>

	<!-- <hr class="hr--light">

	<table class="span--full">
		<tbody>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					G.S.T.
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?php // echo $apt_info[ "#gst" ] ?></span>
				</td>
			</tr>
		</tbody>
	</table> -->

	<hr class="hr--light">

	<table class="span--full">
		<tbody>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Infrastructure Charges
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#infrastructure" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Corpus Deposit
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#corpus_deposit" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Maintenance Fee (1 Year)
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#maintenance" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Legal Charges
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#legal" ] ?></span>
				</td>
			</tr>
		</tbody>
	</table>

	<hr class="hr--light">

	<table class="span--full">
		<tbody>
			<tr>
				<th class="span--3by4 align--left text--l text--thin text--normal apartment-detail">
					Total Cost
				</th>
				<td class="span--quarter align--right text--l text--thin text--normal apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#your_price" ] ?></span>
				</td>
			</tr>
			<tr>
				<th class="span--3by4 align--left text--thin text--subdued apartment-detail">
					Approx. Registration Charges
				</th>
				<td class="span--quarter align--right text--thin text--subdued apartment-detail">
					<span class="symbol--inr"><?= $apt_info[ "#registration" ] ?></span>
				</td>
			</tr>
	</table>

	<div style="margin: 1em !important; border: 1px solid transparent"></div>

	<div class="positioned">
		<p class="[ _2 ] sign--caution">!</p>
		<hr class="[ _3 ] hr--strong">
	</div>

	<p class="align--center">Please Note: This price is only valid for 30 days</p>

</div>
