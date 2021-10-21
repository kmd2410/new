<?php include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; ?>


<?php
	if($is_guest) {
		alert('회원만 이용하실 수 있습니다.');
	}

	// $rowcode = sql_fetch("select mb_id, mb_name, mb_hp, mb_recommend, mb_nick, mb_datetime from sm_member where  mb_id = '{$member['mb_id']}'"); 
	// $recommend_code = $rowcode['mb_nick']; 

	// $sql = "select mb_id, mb_name, mb_hp, mb_recommend, mb_nick, mb_datetime, mb_level from sm_member where  mb_recommend = '{$member['mb_id']}' ORDER BY mb_datetime DESC";
	// $result = sql_query($sql);
		//$cnt = $result['cnt'];
		//$re_cnt = $result['cnt'];
		//$tmp_id = $result['mb_id'];

	// $row_cnt = sql_fetch(" select count(mb_id) as cnt from {$g5['member_table']} where mb_recommend = '{$member['mb_id']}' ");
	// $recommend_cnt = $row_cnt['cnt'];

	// $rows_cnts = sql_fetch(" select count(*) as cnt from {$g5['member_table']} where mb_recommend = '{$member['mb_id']}' ");
	// $recommend_cnts = $row_cnts['cnt'];
	//echo $recommend_cnts;

    // $my_data = sql_fetch("select * form sm_member where mb_recommend = '{$member['mb_id']}'");
    // $count = mysqli_num_rows($my_data);

    $sql = "select mb_id from sm_member where mb_recommend = '{$member['mb_id']}'";
    $result = sql_query($sql);
    // $row_array = sql_fetch_array($result);
    // $row = sql_fetch($result);
?>
<!-- $member 전역변수 -->
<p><?= $member["mb_name"];?>님 안녕하세요</p>
<p><?= $member["mb_id"];?></p>
<?print_r($member);?>
<br>
<br>
<?print_r($result);?>
<br>
<br>
<!-- <?//print_r($row_array);?> -->
<br>
<br>
<!-- <?//print_r($row);?> -->

<?
    for($i=0; $row_array = sql_fetch_array($result); $i++){
        print_r($row_array)."<br>";
    }

    // print_r($row_array);
?>



<?
	$query = "select * from {$g5['g5_shop_cart_table']} where "

?>


<?

	const test01 = [2, 4, 6];
	const test02 = test01.map(x => x*2);

?>


<?php } else if($row['mb_level'] >= 6) { ?>

<form id="regi" name="regi" method="post">
	<input type="hidden" name="ca_name" value="승인대기">

	<div class="grade">
		<div class="inputbox blacks">
			<label for="black">
				<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
				<div class="explain">
					<input type="checkbox" id="black" class="chk" name="grade" value="블랙">
					<span class="price">블랙카드 24만원</span>
					<?php //가격변동시 수정해야된다 ?>
					<input type="hidden" name="prices" value="240000">
					<input type="hidden" name="ca_sales" value="105000">
					<input type="hidden" name="subscribe" value="1100">
				</div>
			</label>
		</div>

		<div class="inputbox reds">
			<label for="red">
				<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
				<div class="explain">
					<input type="checkbox" id="red" class="chk" name="grade" value="레드">
					<span class="price">레드카드 40만5천원</span>
					<?php //가격변동시 수정해야된다 ?>
					<input type="hidden" name="prices" value="405000">
					<input type="hidden" name="ca_sales" value="210000">
					<input type="hidden" name="subscribe" value="3300">
				</div>
			</label>
		</div>

		<div class="inputbox greens">
			<label for="green">
				<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
				<div class="explain">
					<input type="checkbox" id="green" class="chk" name="grade" value="그린">
					<span class="price">그린카드 78만원</span>
					<?php //가격변동시 수정해야된다 ?>
					<input type="hidden" name="prices" value="780000">
					<input type="hidden" name="ca_sales" value="405000">
					<input type="hidden" name="subscribe" value="6600">
				</div>
			</label>
		</div>

		<div class="inputbox golds">
			<label for="gold">
				<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
				<div class="explain">
					<input type="checkbox" id="gold" class="chk" name="grade" value="골드" checked>
					<span class="price">골드카드 114만원</span>
					<?php //가격변동시 수정해야된다 ?>
					<input type="hidden" name="prices" value="1140000">
					<input type="hidden" name="ca_sales" value="600000">
					<input type="hidden" name="subscribe" value="9900">
				</div>
			</label>
		</div>
	</div>

	<style>
		.price { font-size: 11px;}
	</style>

	<div class="diamond">

		<div id="diamondtitle">
			코인 채굴권 신청
			<span class="diabtn">
				<i class="fas fa-question"></i>
			</span>

		</div>

		<div class="inputbox diamond_s silvercard">
			<label for="diamond_s">
				<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
				<div class="explain">
					<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버">
					<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
					<?php //가격변동시 수정해야된다 ?>
					<!-- <input type="hidden" name="prices" value="240000">
					<input type="hidden" name="ca_sales" value="105000">
					<input type="hidden" name="subscribe" value="1100"> -->
				</div>
			</label>
		</div>

		<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
			<!-- <label for="diamond_s"> -->
			<div class="labelnone">
				<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
				<div class="explain">
					<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
					<span class="price">다이아몬드 골드 준비중</span>
					<?php //가격변동시 수정해야된다 ?>
					<!-- <input type="hidden" name="prices" value="240000">
					<input type="hidden" name="ca_sales" value="105000">
					<input type="hidden" name="subscribe" value="1100"> -->
				</div>
			</div>
			<!-- </label> -->

			<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
		</div>

		<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
			<!-- <label for="diamond_s"> -->
			<div class="labelnone">
				<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
				<div class="explain">
					<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
					<span class="price">다이아몬드 더 블랙 준비중</span>
					<?php //가격변동시 수정해야된다 ?>
					<!-- <input type="hidden" name="prices" value="240000">
					<input type="hidden" name="ca_sales" value="105000">
					<input type="hidden" name="subscribe" value="1100"> -->
				</div>
			</div>
			<!-- </label> -->

			<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
		</div>

	</div>

	<div class="aten">(선택한 멤버십 또는 코인 채굴권에 필수 체크)</div>

	<div class="boxlist">

	<?php include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; ?>
<?php include_once $_SERVER["DOCUMENT_ROOT"]."/head.php"; ?>

<?php
	//로그인 한사람아이디가져와서
	$mb_id = $member['mb_id'];
	$mb_levels = $member['mb_level'];

	//echo $mb_levels;

	//조건문걸기
	if($mb_levels > '1'){
	//추천인 끌고와서
	$mb_recomd = $member['mb_recommend'];
	//추천인 등급확인하기
	$sql =" SELECT mb_level FROM `sm_member` WHERE mb_id = '$mb_recomd' ";
	$row = sql_fetch($sql);

	//추천인 등급 뿌려주기
	//echo $row['mb_level'];
	//추천인 아이디 뿌려주기
	//echo $mb_recomd;

	}
?>

<link rel="stylesheet" type="text/css" href="<?php G5_URL ?>/sajangnim/css/registers.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>

<div id="wrap">
	<div id="regititle">
		멤버십 가입
		<span class="nobtn">
			<i class="fas fa-question"></i>
		</span>
	</div>

	<div id="contents">
		<div class="inner">
			<script type="text/javascript">
				$(document).ready(function() {
					$('input[type="checkbox"][name="grade"]').click(function(){
						if($(this).prop('checked')){

							$('input[type="checkbox"][name="grade"]').prop('checked',false);

							$(this).prop('checked',true);
						}
					});

					$('input[type="checkbox"][name="cash_val"]').click(function(){
						if($(this).prop('checked')){

							$('input[type="checkbox"][name="cash_val"]').prop('checked',false);

							$(this).prop('checked',true);
						}
					});
				});
			</script>

			<div id="form">
				<?php if($row['mb_level'] == 2) { ?>

					<style type="text/css">
						.att { width: 100%; height: auto; font-family: 'notokr-medium'; font-size: 13px; color: #C52928; text-align: center; line-height: 13px; line-height: 160%; }
					</style>

					<div class="att">
						<?php echo $member['mb_id']; ?>님의 추천인 <?php echo $member['mb_recommend']; ?>님의 등급이 2등급 이하입니다.<br>
						*추천인 등급보다 높은 등급의 카드는 구매가 불가능합니다.
					</div>

					<button type="button" class="mains" href="<?php G5_URL ?>/">메인으로</button>

				<?php } else if($row['mb_level'] == 3) { ?>

					<form id="regi" name="regi" method="post">
						<input type="hidden" name="ca_name" value="승인대기">

						<div class="grade">
							<div class="inputbox blacks">
								<label for="black">
									<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
									<div class="explain">
										<input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked>
										<span class="price">블랙카드 24만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100">
									</div>
								</label>
							</div>
						

							<div class="inputbox reds">
								<label for="red">
									<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
									<div class="explain">
										<input type="checkbox" id="red" class="chk" name="grade" value="레드" style="display:none;">
										<span class="price">레드카드 40만5천원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="405000">
										<input type="hidden" name="ca_sales" value="210000">
										<input type="hidden" name="subscribe" value="3300">
									</div>
								</label>
							</div>

							<div class="inputbox greens">
								<label for="green">
									<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
									<div class="explain">
										<input type="checkbox" id="green" class="chk" name="grade" value="그린" style="display:none;">
										<span class="price">그린카드 78만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="780000">
										<input type="hidden" name="ca_sales" value="405000">
										<input type="hidden" name="subscribe" value="6600">
									</div>
								</label>
							</div>

							<div class="inputbox golds">
								<label for="gold">
									<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
									<div class="explain">
										<input type="checkbox" id="gold" class="chk" name="grade" value="골드" style="display:none;">
										<span class="price">골드카드 114만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="1140000">
										<input type="hidden" name="ca_sales" value="600000">
										<input type="hidden" name="subscribe" value="9900">
									</div>
								</label>
							</div>

							<div class="diamond">

								<div id="diamondtitle">
									코인 채굴권 신청
									<span class="diabtn">
										<i class="fas fa-question"></i>
									</span>

								</div>

								<div class="inputbox diamond_s silvercard">
									<label for="diamond_s">
										<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
										<div class="explain">
											<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버" style="display:none;">
											<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
											<?php //가격변동시 수정해야된다 ?>
											<!-- <input type="hidden" name="prices" value="240000">
											<input type="hidden" name="ca_sales" value="105000">
											<input type="hidden" name="subscribe" value="1100"> -->
										</div>
									</label>
								</div>

								<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
									<!-- <label for="diamond_s"> -->
									<div class="labelnone">
										<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
										<div class="explain">
											<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
											<span class="price">다이아몬드 골드 준비중</span>
											<?php //가격변동시 수정해야된다 ?>
											<!-- <input type="hidden" name="prices" value="240000">
											<input type="hidden" name="ca_sales" value="105000">
											<input type="hidden" name="subscribe" value="1100"> -->
										</div>
									</div>
									<!-- </label> -->

									<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
								</div>

								<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
									<!-- <label for="diamond_s"> -->
									<div class="labelnone">
										<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
										<div class="explain">
											<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
											<span class="price">다이아몬드 더 블랙 준비중</span>
											<?php //가격변동시 수정해야된다 ?>
											<!-- <input type="hidden" name="prices" value="240000">
											<input type="hidden" name="ca_sales" value="105000">
											<input type="hidden" name="subscribe" value="1100"> -->
										</div>
									</div>
									<!-- </label> -->

									<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
								</div>
							
						</div>


						<div class="aten">(선택한 멤버십에 필수 체크)</div>



						<div class="boxlist">
							<div class="boxs">
								<div class="title">MY 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">고객ID</div>
										<div class="inputbox">
											<input type="text" name="user_id" id="user_id" value="<?php echo $member['mb_id']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">고객명</div>
										<div class="inputbox">
											<input type="text" name="user_name" id="user_name" value="<?php echo $member['mb_name']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">휴대폰</div>
										<div class="inputbox">
											<input type="text" name="user_hp" id="user_hp" value="<?php echo $member['mb_hp']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">이메일</div>
										<div class="inputbox">
											<input type="text" name="user_email" id="user_email" value="<?php echo $member['mb_email']; ?>" required>
										</div>
									</div>
								</div>
							</div>

							<div class="boxs">
								<div class="title">결제수단</div>

								<div class="cash_wrap">
									<div class="cash">
										<span class="name">신용카드</span>
										<input type="checkbox" value="card"  name="cash_val" onclick="oneCheck(this)" class="chk" required checked=”checked”>
									</div>

									<div class="cash">
										<span class="name">무통장입금</span>
										<input type="checkbox" value="money"  name="cash_val" onclick="oneCheck(this)" class="chk">
									</div>


								</div>
							</div>


							<div class="boxs">
								<div class="title">멤버십 입금/결제 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">은행명</div>
										<div class="inputbox">
											<input type="text" name="account1" id="account1" value="기업은행" readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">계좌번호</div>
										<div class="inputbox">
											<input type="text" name="account2" id="account2" value="420-090831-04-051  " readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">예금주</div>
										<div class="inputbox">
											<input type="text" name="account3" id="account3" value="(주)토마토플랫폼" readonly>
										</div>
									</div>
								</div>
							</div>


						</div>

						<button type="submit" name="submits" id="submits" class="oks">완료</button>
					</form>

				<?php } else if($row['mb_level'] == 4) { ?>

					<form id="regi" name="regi" method="post">
						<input type="hidden" name="ca_name" value="승인대기">

						<div class="grade">
							<div class="inputbox blacks">
								<label for="black">
									<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
									<div class="explain">
										<input type="checkbox" id="black" class="chk" name="grade" value="블랙">
										<span class="price">16만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="160000">
										<input type="hidden" name="ca_sales" value="70000">
										<input type="hidden" name="subscribe" value="1100">
									</div>
								</label>
							</div>

							<div class="inputbox reds">
								<label for="red">
									<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
									<div class="explain">
										<input type="checkbox" id="red" class="chk" name="grade" value="레드" checked>
										<span class="price">27만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="270000">
										<input type="hidden" name="ca_sales" value="140000">
										<input type="hidden" name="subscribe" value="3300">
									</div>
								</label>
							</div>

							<div class="inputbox greens">
								<label for="green">
									<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
									<div class="explain">
										<input type="checkbox" id="green" class="chk" name="grade" value="그린" style="display:none;">
										<span class="price">그린카드 78만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="780000">
										<input type="hidden" name="ca_sales" value="405000">
										<input type="hidden" name="subscribe" value="6600">
									</div>
								</label>
							</div>

							<div class="inputbox golds">
								<label for="gold">
									<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
									<div class="explain">
										<input type="checkbox" id="gold" class="chk" name="grade" value="골드" style="display:none;">
										<span class="price">골드카드 114만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="1140000">
										<input type="hidden" name="ca_sales" value="600000">
										<input type="hidden" name="subscribe" value="9900">
									</div>
								</label>
							</div>
						</div>

						<div class="diamond">

							<div id="diamondtitle">
								코인 채굴권 신청
								<span class="diabtn">
									<i class="fas fa-question"></i>
								</span>

							</div>

							<div class="inputbox diamond_s silvercard">
								<label for="diamond_s">
									<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
									<div class="explain">
										<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버" style="display:none;">
										<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</label>
							</div>

							<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 골드 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

							<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 더 블랙 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

						</div>


						<div class="aten">(선택한 멤버십에 필수 체크)</div>



						<div class="boxlist">
							<div class="boxs">
								<div class="title">MY 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">고객ID</div>
										<div class="inputbox">
											<input type="text" name="user_id" id="user_id" value="<?php echo $member['mb_id']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">고객명</div>
										<div class="inputbox">
											<input type="text" name="user_name" id="user_name" value="<?php echo $member['mb_name']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">휴대폰</div>
										<div class="inputbox">
											<input type="text" name="user_hp" id="user_hp" value="<?php echo $member['mb_hp']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">이메일</div>
										<div class="inputbox">
											<input type="text" name="user_email" id="user_email" value="<?php echo $member['mb_email']; ?>" required>
										</div>
									</div>
								</div>

							</div>

							<div class="boxs">
								<div class="title">결제수단</div>

								<div class="cash_wrap">
									<div class="cash">
										<span class="name">신용카드</span>
										<input type="checkbox" value="card"  name="cash_val" onclick="oneCheck(this)" class="chk" required checked=”checked”>
									</div>

									<div class="cash">
										<span class="name">무통장입금</span>
										<input type="checkbox" value="money"  name="cash_val" onclick="oneCheck(this)" class="chk">
									</div>


								</div>
							</div>

							<div class="boxs">
								<div class="title">멤버십 입금/결제 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">은행명</div>
										<div class="inputbox">
											<input type="text" name="account1" id="account1" value="기업은행" readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">계좌번호</div>
										<div class="inputbox">
											<input type="text" name="account2" id="account2" value="420-090831-04-051  " readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">예금주</div>
										<div class="inputbox">
											<input type="text" name="account3" id="account3" value="(주)토마토플랫폼" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" name="submits" id="submits" class="oks">완료</button>
					</form>

				<?php } else if($row['mb_level'] == 5) { ?>

					<form id="regi" name="regi" method="post">
						<input type="hidden" name="ca_name" value="승인대기">

						<div class="grade">
							<div class="inputbox blacks">
								<label for="black">
									<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
									<div class="explain">
										<input type="checkbox" id="black" class="chk" name="grade" value="블랙">
										<span class="price">16만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="160000">
										<input type="hidden" name="ca_sales" value="70000">
										<input type="hidden" name="subscribe" value="1100">
									</div>
								</label>
							</div>

							<div class="inputbox reds">
								<label for="red">
									<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
									<div class="explain">
										<input type="checkbox" id="red" class="chk" name="grade" value="레드">
										<span class="price">27만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="270000">
										<input type="hidden" name="ca_sales" value="140000">
										<input type="hidden" name="subscribe" value="3300">
									</div>
								</label>
							</div>

							<div class="inputbox greens">
								<label for="green">
									<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
									<div class="explain">
										<input type="checkbox" id="green" class="chk" name="grade" value="그린" checked>
										<span class="price">52만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="520000">
										<input type="hidden" name="ca_sales" value="270000">
										<input type="hidden" name="subscribe" value="6600">
									</div>
								</label>
							</div>

							<div class="inputbox golds">
								<label for="gold">
									<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
									<div class="explain">
										<input type="checkbox" id="gold" class="chk" name="grade" value="골드" style="display:none;">
										<span class="price">골드카드 114만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="1140000">
										<input type="hidden" name="ca_sales" value="600000">
										<input type="hidden" name="subscribe" value="9900">
									</div>
								</label>
							</div>
						</div>

						<div class="diamond">

							<div id="diamondtitle">
								코인 채굴권 신청
								<span class="diabtn">
									<i class="fas fa-question"></i>
								</span>

							</div>

							<div class="inputbox diamond_s silvercard">
								<label for="diamond_s">
									<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
									<div class="explain">
										<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버" style="display:none;">
										<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</label>
							</div>

							<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 골드 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

							<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 더 블랙 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

						</div>


						<div class="aten">(선택한 멤버십에 필수 체크)</div>

						<div class="boxlist">
							<div class="boxs">
								<div class="title">MY 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">고객ID</div>
										<div class="inputbox">
											<input type="text" name="user_id" id="user_id" value="<?php echo $member['mb_id']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">고객명</div>
										<div class="inputbox">
											<input type="text" name="user_name" id="user_name" value="<?php echo $member['mb_name']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">휴대폰</div>
										<div class="inputbox">
											<input type="text" name="user_hp" id="user_hp" value="<?php echo $member['mb_hp']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">이메일</div>
										<div class="inputbox">
											<input type="text" name="user_email" id="user_email" value="<?php echo $member['mb_email']; ?>" required>
										</div>
									</div>
								</div>
							</div>

							<div class="boxs">
								<div class="title">결제수단</div>

								<div class="cash_wrap">
									<div class="cash">
										<span class="name">신용카드</span>
										<input type="checkbox" value="card" name="cash_val" onclick="oneCheck(this)" class="chk" required checked=”checked”>
									</div>

									<div class="cash">
										<span class="name">무통장입금</span>
										<input type="checkbox" value="money" name="cash_val" onclick="oneCheck(this)" class="chk">
									</div>


								</div>
							</div>

							<div class="boxs">
								<div class="title">멤버십 입금/결제 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">은행명</div>
										<div class="inputbox">
											<input type="text" name="account1" id="account1" value="기업은행" readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">계좌번호</div>
										<div class="inputbox">
											<input type="text" name="account2" id="account2" value="420-090831-04-051  " readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">예금주</div>
										<div class="inputbox">
											<input type="text" name="account3" id="account3" value="(주)토마토플랫폼" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" name="submits" id="submits" class="oks">완료</button>
					</form>

				<?php } else if($row['mb_level'] == 6) { ?>

					<form id="regi" name="regi" method="post">
						<input type="hidden" name="ca_name" value="승인대기">

						<div class="grade">
							<div class="inputbox blacks">
								<label for="black">
									<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
									<div class="explain">
										<input type="checkbox" id="black" class="chk" name="grade" value="블랙">
										<span class="price">블랙카드 24만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100">
									</div>
								</label>
							</div>

							<div class="inputbox reds">
								<label for="red">
									<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
									<div class="explain">
										<input type="checkbox" id="red" class="chk" name="grade" value="레드">
										<span class="price">레드카드 40만5천원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="405000">
										<input type="hidden" name="ca_sales" value="210000">
										<input type="hidden" name="subscribe" value="3300">
									</div>
								</label>
							</div>

							<div class="inputbox greens">
								<label for="green">
									<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
									<div class="explain">
										<input type="checkbox" id="green" class="chk" name="grade" value="그린">
										<span class="price">그린카드 78만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="780000">
										<input type="hidden" name="ca_sales" value="405000">
										<input type="hidden" name="subscribe" value="6600">
									</div>
								</label>
							</div>

							<div class="inputbox golds">
								<label for="gold">
									<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
									<div class="explain">
										<input type="checkbox" id="gold" class="chk" name="grade" value="골드" checked>
										<span class="price">골드카드 114만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="1140000">
										<input type="hidden" name="ca_sales" value="600000">
										<input type="hidden" name="subscribe" value="9900">
									</div>
								</label>
							</div>
						</div>

						<style>
							.price { font-size: 11px;}
						</style>

						<div class="diamond">

							<div id="diamondtitle">
								코인 채굴권 신청
								<span class="diabtn">
									<i class="fas fa-question"></i>
								</span>

							</div>

							<div class="inputbox diamond_s silvercard">
								<label for="diamond_s">
									<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
									<div class="explain">
										<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버" style="display:none;">
										<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</label>
							</div>

							<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 골드 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

							<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 더 블랙 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

						</div>

						<div class="aten">(선택한 멤버십 또는 코인 채굴권에 필수 체크)</div>

						<div class="boxlist">
							<div class="boxs">
								<div class="title">MY 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">고객ID</div>
										<div class="inputbox">
											<input type="text" name="user_id" id="user_id" value="<?php echo $member['mb_id']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">고객명</div>
										<div class="inputbox">
											<input type="text" name="user_name" id="user_name" value="<?php echo $member['mb_name']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">휴대폰</div>
										<div class="inputbox">
											<input type="text" name="user_hp" id="user_hp" value="<?php echo $member['mb_hp']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">이메일</div>
										<div class="inputbox">
											<input type="text" name="user_email" id="user_email" value="<?php echo $member['mb_email']; ?>" required>
										</div>
									</div>
								</div>
							</div>

							<div class="boxs">
								<div class="title">결제수단</div>

								<div class="cash_wrap">
									<div class="cash">
										<span class="name">신용카드</span>
										<input type="checkbox" value="card" name="cash_val" onclick="oneCheck(this)" class="chk" required checked=”checked”>
									</div>

									<div class="cash">
										<span class="name">무통장입금</span>
										<input type="checkbox" value="money" name="cash_val" onclick="oneCheck(this)" class="chk">
									</div>


								</div>
							</div>

							<div class="boxs">
								<div class="title">멤버십 입금/결제 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">은행명</div>
										<div class="inputbox">
											<input type="text" name="account1" id="account1" value="기업은행" readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">계좌번호</div>
										<div class="inputbox">
											<input type="text" name="account2" id="account2" value="420-090831-04-051  " readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">예금주</div>
										<div class="inputbox">
											<input type="text" name="account3" id="account3" value="(주)토마토플랫폼" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" name="submits" id="submits" class="oks">완료</button>
					</form>

					<?php } else if($row['mb_level'] > 6) { ?>

					<form id="regi" name="regi" method="post">
						<input type="hidden" name="ca_name" value="승인대기">

						<div class="grade">
							<div class="inputbox blacks">
								<label for="black">
									<img src="<?php G5_URL ?>/sajangnim/img/blackcard.png" alt="블랙">
									<div class="explain">
										<input type="checkbox" id="black" class="chk" name="grade" value="블랙">
										<span class="price">16만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="160000">
										<input type="hidden" name="ca_sales" value="70000">
										<input type="hidden" name="subscribe" value="1100">
									</div>
								</label>
							</div>

							<div class="inputbox reds">
								<label for="red">
									<img src="<?php G5_URL ?>/sajangnim/img/redcard.png" alt="레드">
									<div class="explain">
										<input type="checkbox" id="red" class="chk" name="grade" value="레드">
										<span class="price">27만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="270000">
										<input type="hidden" name="ca_sales" value="140000">
										<input type="hidden" name="subscribe" value="3300">
									</div>
								</label>
							</div>

							<div class="inputbox greens">
								<label for="green">
									<img src="<?php G5_URL ?>/sajangnim/img/greencard.png" alt="그린">
									<div class="explain">
										<input type="checkbox" id="green" class="chk" name="grade" value="그린">
										<span class="price">52만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="520000">
										<input type="hidden" name="ca_sales" value="270000">
										<input type="hidden" name="subscribe" value="6600">
									</div>
								</label>
							</div>

							<div class="inputbox golds">
								<label for="gold">
									<img src="<?php G5_URL ?>/sajangnim/img/goldcard.png" alt="골드">
									<div class="explain">
										<input type="checkbox" id="gold" class="chk" name="grade" value="골드">
										<span class="price">골드카드 114만원</span>
										<?php //가격변동시 수정해야된다 ?>
										<input type="hidden" name="prices" value="1140000">
										<input type="hidden" name="ca_sales" value="600000">
										<input type="hidden" name="subscribe" value="9900">
									</div>
								</label>
							</div>
						

						<div class="diamond">

							<div id="diamondtitle">
								코인 채굴권 신청
								<span class="diabtn">
									<i class="fas fa-question"></i>
								</span>

							</div>

							<div class="inputbox diamond_s silvercard">
								<label for="diamond_s">
									<img src="<?php G5_URL ?>/sajangnim/img/diasilver.gif" alt="다이아몬드실버">
									<div class="explain">
										<input type="checkbox" id="diamond_s" class="chk" name="grade" value="다이아몬드실버" checked>
										<span class="price">다이아몬드 실버 선 예약 신청중 (PC+모바일 용)<br>304만원 + 50만 BPTC</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</label>
							</div>

							<div class="inputbox diamond_s mr2" onclick="toast('다이아몬드 골드/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diagold.gif" alt="다이아몬드골드">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 골드 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

							<div class="inputbox diamond_s"  onclick="toast('다이아몬드 더 블랙/코인 채굴권 서비스 준비중입니다.')">
								<!-- <label for="diamond_s"> -->
								<div class="labelnone">
									<img src="<?php G5_URL ?>/sajangnim/img/diablack.gif" alt="다이아몬드블랙">
									<div class="explain">
										<!-- <input type="checkbox" id="black" class="chk" name="grade" value="블랙" checked> -->
										<span class="price">다이아몬드 더 블랙 준비중</span>
										<?php //가격변동시 수정해야된다 ?>
										<!-- <input type="hidden" name="prices" value="240000">
										<input type="hidden" name="ca_sales" value="105000">
										<input type="hidden" name="subscribe" value="1100"> -->
									</div>
								</div>
								<!-- </label> -->

								<!-- 라벨이 활성화가 되어있지않은데 타 체크박스에 영향을 줍니다. 활성화시 labelnone을 삭제하고 label태그를 활성화해주세요 -->
							</div>

						</div>


						<div class="aten">(선택한 멤버십에 필수 체크)</div>

						<div class="boxlist">
							<div class="boxs">
								<div class="title">MY 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">고객ID</div>
										<div class="inputbox">
											<input type="text" name="user_id" id="user_id" value="<?php echo $member['mb_id']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">고객명</div>
										<div class="inputbox">
											<input type="text" name="user_name" id="user_name" value="<?php echo $member['mb_name']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">휴대폰</div>
										<div class="inputbox">
											<input type="text" name="user_hp" id="user_hp" value="<?php echo $member['mb_hp']; ?>" required>
										</div>
									</div>

									<div class="box">
										<div class="name">이메일</div>
										<div class="inputbox">
											<input type="text" name="user_email" id="user_email" value="<?php echo $member['mb_email']; ?>" required>
										</div>
									</div>
								</div>
							</div>

							<div class="boxs">
								<div class="title">결제수단</div>

								<div class="cash_wrap">
									<div class="cash">
										<span class="name">신용카드</span>
										<input type="checkbox" value="card" name="cash_val" onclick="oneCheck(this)" class="chk" required checked=”checked”>
									</div>

									<div class="cash">
										<span class="name">무통장입금</span>
										<input type="checkbox" value="money" name="cash_val" onclick="oneCheck(this)" class="chk">
									</div>


								</div>
							</div>

							<div class="boxs">
								<div class="title">멤버십 입금/결제 정보</div>

								<div class="bx">
									<div class="box">
										<div class="name">은행명</div>
										<div class="inputbox">
											<input type="text" name="account1" id="account1" value="기업은행" readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">계좌번호</div>
										<div class="inputbox">
											<input type="text" name="account2" id="account2" value="420-090831-04-051  " readonly>
										</div>
									</div>

									<div class="box">
										<div class="name">예금주</div>
										<div class="inputbox">
											<input type="text" name="account3" id="account3" value="(주)토마토플랫폼" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>

						<button type="submit" name="submits" id="submits" class="oks">완료</button>
					</form>

				<?php } ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.nobtn').click(function() {
			$('#modal').show();
		});

		$('#modal .closes').click(function() {
			$('#modal').hide();
		});

		$('.diabtn').click(function() {
			$('#diamodal').show();
		});

		$('#diamodal .closes').click(function() {
			$('#diamodal').hide();
		});
	});
</script>

<div id="modal">
	<div class="modalbox">
		<div class="title">
			<img src="/sajangnim/img/registers.png" alt="" style="width: 100%; border-radius: 5px;">
		</div>

		<div class="closes">닫기</div>
	</div>
</div>

<div id="diamodal">
	<div class="modalbox">
		<div class="title">
			<img src="/sajangnim/img/diamondpop.png" alt="" style="width: 100%; border-radius: 5px;">
		</div>

		<div class="closes">닫기</div>
	</div>
</div>

<div id="toast">

</div>

<script type="text/javascript">



	// function oneCheck(a){
    //     let obj = $(".chk");
    //     for(let i=0; i<obj.length; i++){
    //         if (obj[i] != a){
    //             obj[i].checked = false;
    //         }
    //     }
    // }

	$("#submits").click(function (event) {
	    //preventDefault로 submits 이벤트를 막음
	    event.preventDefault();


	    var user_id = $("#user_id").val();
	    var user_name = $("#user_name").val();
	    var user_hp = $("#user_hp").val();
	    var user_email = $("#user_email").val();

		let check = $('input:checkbox[name="cash_val"]:checked').val();





	    if(user_id == '') {

	        alert('유저 아이디를 불러오지 못했습니다. 새로고침후 사용해주세요.');

	    } else if(user_name == '') {

	        alert('유저 이름을 불러오지 못했습니다. 새로고침후 사용해주세요.');

	    } else if(user_hp == '' ) {

	        alert('연락받으실 핸드폰번호를 입력해주세요.');
	        $("#user_hp").focus();

		} else if(user_email == '') {

	        alert('유저 이메일을 불러오지 못했습니다. 새로고침후 사용해주세요.');

	    } else {

		    // Get form
		    var form = $('#regi')[0];
		    // Create an FormData object
		    var data = new FormData(form);
		    // disabled the submits button
		    $("#submits").prop("disabled", true);

		    $.ajax({
		        type: "POST",
		        enctype: 'multipart/form-data',
		        url: "registers_update.php",
		        data: data,
		        processData: false,
		        contentType: false,
		        cache: false,
		        timeout: 600000,
		        beforeSend : function() {
		            //alert('지갑 생성 중 입니다'); // 전송 전 실행 코드
		        },
		        success: function (data) {
		        	$('body').html(data);
		            //alert("신청이 완료되었습니다.");
		            $("#submits").prop("disabled", false);
		            // $("#okModals").hide();
		            // $("#okModals input").val();
		            // location.reload(true);

					if(check == money){
		             location.reload(true);
					}
		        },
		        error: function (e) {
		            console.log("ERROR : ", e);
		            $("#submits").prop("disabled", false);
		            //alert("신청에 실패하였습니다.");
		            // $("#okModals").hide();
		            // $("#okModals input").val();
		            location.reload(true);
		         }
		    });
	    }
	});

	let removeToast;

	function toast(string) {
    const toast = document.getElementById("toast");

    toast.classList.contains("open") ?
        (clearTimeout(removeToast), removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("open")
        }, 2000)) :
        removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("open")
        }, 2000)
    toast.classList.add("open"),
        toast.innerText = string
}


</script>

<?php include_once $_SERVER["DOCUMENT_ROOT"]."/tail.php"; ?>
