<?php

$curl = curl_init();

$data = array(
    'keyapi' => $byshop_key,
    'username_customer' => $user["id"]
);


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://byshop.me/api/history-all', 
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_POSTFIELDS => http_build_query($data),
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);
curl_close($curl);
$load_packz = json_decode($response);

?>

<div class="modal fade text-white bg-glass" id="appInfoModal" tabindex="-1" role="dialog" aria-labelledby="appInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-white bg-glass" style="border-radius: 1vh;">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="appInfoModalLabel">ข้อมูล App Premium</h5>
                <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close"></button>
                
            </div>
            <div class="modal-body text-dark" id="appInfoContent">
                <!-- ข้อมูลจะถูกแสดงที่นี่ -->
            </div>
        </div>
    </div>
</div>


<div class="container-fluid ps-4 pe-4 bg-white border border-2">
<center class="m-0"><h2 class="text-main mb-2 mt-4"><i class="fa-regular fa-history"></i> ประวัติแอพพรีเมี่ยม</h2></center>
<hr class="mt-1">
    <div class="table-responsive">
        <table class="table   table-striped " id="table">
            <thead>
            <tr>
                <th class="text-center" scope="col">ชื่อรายการ</th>
                <th class="text-center" scope="col">ของรางวัล</th>
                <th class="text-center" scope="col">แจ้งปัญหา</th>
                <th class="text-center" scope="col">วันที่</th>
            </tr>
            </thead>
            <tbody>
            <?php 
			    foreach ($load_packz as $data) {
			?>
            <tr>
                <td class="text-center"><?=$data->name;?></td>
                <td class="text-center"><button class="btn bg-main w-100 mb-2 view-info-btn text-white" data-toggle="modal" data-target="#appInfoModal" data-info="Email : <?= htmlspecialchars($data->email); ?> | Password : <?= htmlspecialchars($data->password); ?>"><i class="fa-regular fa-search"></i>&nbsp;ดูข้อมูล</button></td>
                <td class="text-center"><a style="width: 10rem;" type="button" class="btn btn-dark" target="_blank" data-toggle="modal" data-target="#report<?=$data->id;?>" href="#"><i class="fa fa-wrench"></i> แจ้งปัญหา</a></td>
                <td class="text-center"><?=$data->time;?></td>
            </tr>
				<!-- report แจ้งปัญหา -->
					<div class="modal fade " id="report<?=$data->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header ">
								<h5 class="modal-title " id="exampleModalLabel"><i class="fa fa-wrench"></i> แจ้งปัญหา</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							<div class="container">
							<iframe frameborder="0" height="450" src=" https://report_product.byshop.me/api/report/?OrderID=<?=$data->id;?>" width="100%"></iframe>
							</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
						
							</div>
							</div>
						</div>
					</div>	
            <?php  } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    // Triggered when "ดูข้อมูล" button is clicked
    $(".view-info-btn").click(function() {
        // Get the info attribute from the button
        var appInfo = $(this).data("info");

        // Set the content of the modal body
        $("#appInfoContent").html(appInfo);
    });
</script>
