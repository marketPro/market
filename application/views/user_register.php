<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>تسويق الكتروني</title>
		
		<meta name="keywords" content="content">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0">		

		
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>css/angelina.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" >		
		<link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" type="text/css" >	
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen">
		<!-- template skin -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/skin.css"type="text/css" >	
		
        <link href="<?php echo base_url();?>css/ticker-style.css" rel="stylesheet" type="text/css" />
	
	     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

		<!-- FlexSlider -->	
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/function.js" type="text/javascript" ></script> 

		<!-- Ticker -->	
		<script src="<?php echo base_url();?>js/ticker.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting.js"  type="text/javascript" ></script> 

		<!-- prettyPhoto -->	
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting-1.js"type="text/javascript"  ></script> 

		<!-- ui totop -->	
		<script src="<?php echo base_url();?>js/smoothscroll.js"  type="text/javascript" ></script>
		<script src="<?php echo base_url();?>js/jquery.ui.totop.js"  type="text/javascript"></script>
		
	<script src="<?php echo base_url();?>js/jquery.ticker.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/site.js" type="text/javascript"></script>
		
		
	</head>
	<body>
	
	<!-- start of wrapper -->
	<div id="wrapper">
	
		<!-- start of section top -->
		<section id="top">
			<div id="top-wrapp">
					<?php include('header.php')?>
				
					
						
					
                   
			</div>
		</section>
		<!-- end of section top -->

		<!-- start of section middle -->
        <div id="news" > 
        <ul id="js-news" class="js-hidden">
		<li class="news-item"><a href="fa.hrml">محمود شعبان يقدم برنامج هاتولى راجل على قناة الحافظ</a></li>
		<li class="news-item">jQuery News Ticker now has support for right-to-left languages!</li>
		<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
		<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
		<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
		<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
		<li class="news-item">Further updates to jQuery News Ticker are coming soon!</li>
	</ul>
        </div>
		<section id="">	
			<div class="container totop30">
				<section id="middle">
			<div id="content">
			    <div id="left" style="background:#111">       
                <div class="featured_form">
									 <?php echo form_open('#'); ?>
									<div class="heading center">
										<h4><span class="bold">يجب ادخال جميع البيانات بشكل صحيح</span></h4>
										<div class="dotted"></div>
									</div>
										<ul>
											<li>
								<label for="name">اسم المستخدم</label>
                                 <?php echo form_input(array('name'=>'username','id'=>"name",'onblur'=>"if(this.value=='')this.value='اسم المستخدم';" , 'onfocus'=>"if(this.value=='اسم المستخدم')this.value='';", 'value'=>"اسم المستخدم")); ?>

											</li>
											<li>
								<label for="email">البريد الالكتروني</label>

                                <?php echo form_input(array('name'=>'email','id'=>"email",'onblur'=>"if(this.value=='')this.value='البريد الالكتروني';" , 'onfocus'=>"if(this.value=='البريد الالكتروني')this.value='';", 'value'=>"البريد الالكتروني")); ?>
											</li>
                                            <li>
								<label for="email">الدوله</label>

     <select name="CmbCountry" id="CmbCountry" class="home" style="width:570px;text-align:right" >
    <option value="none" selected="selected" >اختار دولتك</option>
	<option value="AF">أفغانستان</option>
	<option value="AL">البانيا</option>
	<option value="DZ">الجزائر</option>
	<option value="AS">ساموا الأمريكية</option>
	<option value="AD">اندورا</option>
	<option value="AO">انغولا</option>
	<option value="AI">انجولا</option>
	<option value="AQ">انتركتيكا</option>
	<option value="AG">انتيغوا وبربودا</option>
	<option value="AR">الأرجنتين</option>
	<option value="AM">ارمينيا</option>
	<option value="AW">اروبا</option>
	<option value="AC">جزيرة أسينشون</option>
	<option value="AU">استراليا</option>
	<option value="AT">النمسا</option>
	<option value="AZ">اذربيجان</option>
	<option value="BS">البهامز</option>
	<option value="BH">البحرين</option>
	<option value="BD">بنجلادش</option>
	<option value="BB">بربادوس</option>
	<option value="BY">بيلا روس</option>
	<option value="BE">بلجيكا</option>
	<option value="BZ">بليز</option>
	<option value="BJ">بنن</option>
	<option value="BM">برمودا</option>
	<option value="BT">بوتان</option>
	<option value="BO">بوليفيا</option>
	<option value="BA">البوسنة والهرسك</option>
	<option value="BW">بوتسوانا</option>
	<option value="BV">جزيرة بوفيت</option>
	<option value="BR">البرازيل</option>
	<option value="BN">بروناى دار السلام</option>
	<option value="BG">بلغاريا</option>
	<option value="BF">بوركينا فاسو</option>
	<option value="BI">بوروندي</option>
	<option value="KH">كامبوديا</option>
	<option value="CM">كاميرون</option>
	<option value="CA">كندا</option>
	<option value="CV">كيب فردي</option>
	<option value="KY">جزر كايمان</option>
	<option value="CF">جمهورية أفريقيا الوسطي</option>
	<option value="TD">تشاد</option>
	<option value="CL">تشيلي</option>
	<option value="CN">الصين</option>
	<option value="CX">جزيرة كريسماس</option>
	<option value="CC">جزر كوكس ( كيلنغ)</option>
	<option value="CO">كولومبيا</option>
	<option value="KM">جزر القمر</option>
	<option value="CG">الكونغو (جمهورية الكونغو الديموقراطية)</option>
	<option value="CK">جرز كوك</option>
	<option value="CR">كوستا ريكا</option>
	<option value="CI">كوت ديفوار</option>
	<option value="HR">كرواتيا</option>
	<option value="CU">كوبا</option>
	<option value="CY">قبرص</option>
	<option value="CZ">الجمهورية التشيكية</option>
	<option value="DK">الدنمارك</option>
	<option value="DJ">جيبوتى</option>
	<option value="DM">دومينيكا</option>
	<option value="DO">الجمهورية الدومينكية</option>
	<option value="TP">تيمور الشرقية</option>
	<option value="EC">الاكوادور</option>
	
	<option value="SV">السلفادور</option>
	<option value="GQ">غينيا الاستوائية</option>
	<option value="ER">اريتريا</option>
	<option value="EE">استونيا</option>
	<option value="ET">اثيوبيا</option>
	<option value="FK">جرز فوكلاند (مالفيناس)</option>
	<option value="FO">جزر فارو</option>
	<option value="FJ">فيجي</option>
	<option value="FI">فنلندا</option>
	<option value="FR">فرنسا</option>
	<option value="GF">غويانا الفرنسية</option>
	<option value="PF">بولينيزيا الفرنسية</option>
	<option value="TF">الفرنسية الجنوبية وانتركاتيكا</option>
	<option value="GA">الجابون</option>
	<option value="GM">غامبيا</option>
	<option value="GE">جورجيا</option>
	<option value="DE">المانيا</option>
	<option value="GH">غانا</option>
	<option value="GI">جبل طارق</option>
	<option value="GR">اليونان</option>
	<option value="GL">الجزيرة الخضراء</option>
	<option value="GD">غرينادا</option>
	<option value="GP">غواديلوب</option>
	<option value="GU">جوام</option>
	<option value="GT">جواتيمالا</option>
	<option value="GG">جرنساي</option>
	<option value="GW">غينيا بوساي</option>
	<option value="GN">غينيا</option>
	<option value="GY">غيانا</option>
    <option  value="EG">مصر</option>
	<option value="HT">هايتي</option>
	<option value="HN">هندوراس</option>
	<option value="HK">هونج كونج</option>
	<option value="HU">هنغاريا</option>
	<option value="IS">ايسلندا</option>
	<option value="IN">الهند</option>
	<option value="ID">اندونيسيا</option>
	<option value="IR">ايران</option>
	<option value="IQ">العراق</option>
	<option value="IE">ايرلاندا</option>
	<option value="IL">اسرائيل</option>
	<option value="IT">ايطاليا</option>
	<option value="JM">جامايكا</option>
	<option value="JP">اليابان</option>
	<option value="JE">جيرزي</option>
	<option value="JO">الاردن</option>
	<option value="KZ">كازاخستان</option>
	<option value="KE">كينيا</option>
	<option value="KI">كيريباتي</option>
	<option value="KR">كوريا</option>
	<option value="KW">الكويت</option>
	<option value="KG">قيرغيزستان</option>
	<option value="LA">لواس</option>
	<option value="LV">لاتفيا</option>
	<option value="LB">لبنان</option>
	<option value="LS">ليسوتو</option>
	<option value="LR">ليبيريا</option>
	<option value="LY">الجماهيرية الليبية</option>
	<option value="LI">ليختننشتاين</option>
	<option value="LT">ليتوانيا</option>
	<option value="LU">لوكسمبورج</option>
	<option value="MO">منطقة ماكاو الاداريه الخاصة</option>
	<option value="MK">مقدونية</option>
	<option value="MG">مدغشقر</option>
	<option value="MW">مالاوي</option>
	<option value="MY">ماليزيا</option>
	<option value="MV">جزر المالديف</option>
	<option value="ML">مالي</option>
	<option value="MT">مالطا</option>
	<option value="MH">جزر المارشال</option>
	<option value="MQ">مارتينيك</option>
	<option value="MR">موريتانيا</option>
	<option value="MU">موريشيوس</option>
	<option value="YT">مايوت</option>
	<option value="MX">المكسيك</option>
	<option value="FM">ماكرونيزيا</option>
	<option value="MD">مولدوفا</option>
	<option value="MC">موناكو</option>
	<option value="MN">منغوليا</option>
	<option value="MS">منتسيرات</option>
	<option value="MA">المغرب</option>
	<option value="MZ">موزامبيق</option>
	<option value="MM">مايانمار</option>
	<option value="NA">ناميبيا</option>
	<option value="NR">ناورو</option>
	<option value="NP">نيبال</option>
	<option value="NL">هولندا</option>
	<option value="AN">جزر الانتيل الهولندية</option>
	<option value="NC">كالدونيا الجديدة</option>
	<option value="NZ">نيوزيلاندا</option>
	<option value="NI">نيكاراجوا</option>
	<option value="NE">النيجر</option>
	<option value="NG">نيجيريا</option>
	<option value="NU">نيو</option>
	<option value="NF">جزيرة نورفولك</option>
	<option value="NK">كوريا الشمالية</option>
	<option value="MP">جزر ماريانا الشمالية</option>
	<option value="NO">النرويج</option>
	<option value="NS">غير محددي الجنسيNة</option>
	<option value="OM">عمان</option>
	<option value="PK">باكستان</option>
	<option value="PW">بالاو</option>
	<option value="PS">السلطة الفلسطينية</option>
	<option value="PA">بنما</option>
	<option value="PG">بابوا غينيا الجديدة</option>
	<option value="PY">باراغواي</option>
	<option value="PE">بيرو</option>
	<option value="PH">الفليبين</option>
	<option value="PN">جزر بيتكيرن</option>
	<option value="PL">بولندا</option>
	<option value="PT">برتغال</option>
	<option value="PR">بورتو ريكو</option>
	<option value="QA">قطر</option>
	<option value="RE">ريونيون</option>
	<option value="RO">رومانيا</option>
	<option value="RU">روسيا الاتحادية</option>
	<option value="RW">رواندا</option>
	<option value="LC">سانت لوسيا</option>
	<option value="VC">سانت فنسينت</option>
	<option value="WS">ساموا</option>
	<option value="SM">سان مارينو</option>
	<option value="ST">ساو تومي وبرينسيبي</option>
	<option value="SA">المملكة العربية السعودية</option>
	<option value="SN">السنغال</option>
	<option value="Se">صربيا والجبل الاسود</option>
	<option value="SC">سيشيل</option>
	<option value="SL">سيراليون</option>
	<option value="SG">سنغافورة</option>
	<option value="SK">سلوفاكيا</option>
	<option value="SI">سلوفينيا</option>
	<option value="SB">جزر سليمان</option>
	<option value="SO">الصومال</option>
	<option value="ZA">جنوب أفريقيا</option>
	<option value="GS">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
	<option value="ES">اسبانيا</option>
	<option value="LK">سريلانكا</option>
	<option value="SH">سانت هيلانة</option>
	<option value="PM">سانت بيير وميكلون</option>
	<option value="SD">السودان</option>
	<option value="SR">سورينام</option>
	<option value="SZ">سوازيلاند</option>
	<option value="CH">سويسرا</option>
	<option value="SY">الجمهورية العربية السورية</option>
	<option value="TW">تايوان</option>
	<option value="TJ">طاجيكستان</option>
	<option value="TZ">تانزانيا</option>
	<option value="TH">تايلاند</option>
	<option value="TG">توغو</option>
	<option value="TK">توكيلاو</option>
	<option value="TO">تونجا</option>
	<option value="TT">ترينيداد وتوباغو</option>
	<option value="TN">تونس</option>
	<option value="TR">تركيا</option>
	<option value="TM">توركمنستان</option>
	<option value="TC">جزر تركس و كايكوس</option>
	<option value="TV">توفالو</option>
	<option value="UG">اوغندا</option>
	<option value="UA">اوكرانيا</option>
	<option value="AE">الامارات العربية المتحدة</option>
	<option value="UK">المملكة المتحدة</option>
	<option value="US">الولايات المتحدة</option>
	<option value="UY">اوروغواي</option>
	<option value="UZ">اوزبكستان</option>
	<option value="VU">فانواتو</option>
	<option value="VA">الفاتيكان</option>
	<option value="VE">فنزويلا</option>
	<option value="VN">فيتنام</option>
	<option value="VI">جزر فيرجن البريطانية</option>
	<option value="WF">واليس وفوتونا</option>
	<option value="EH">الصحراء الغربية</option>
	<option value="YE">اليمن</option>
	<option value="YU">يوغوسلافيا</option>
	<option value="ZR">زائير</option>
	<option value="ZM">زامبيا</option>
	<option value="ZW">زيمبابوي</option>

</select>
											</li> 
                                              <li>
                                              
								<label for="email">المدينه</label>

                                <?php echo form_input(array('name'=>'city','id'=>"email",'onblur'=>"if(this.value=='')this.value='المدينه';" , 'onfocus'=>"if(this.value=='المدينه')this.value='';", 'value'=>"المدينه")); ?>
											</li> 
                                           <li>
                                                    
								<label for="email">الرقم البريدي</label>

                                <?php echo form_input(array('name'=>'zip_code','id'=>"email",'onblur'=>"if(this.value=='')this.value='الرقم البريدي';" , 'onfocus'=>"if(this.value=='الرقم البريدي')this.value='';", 'value'=>"الرقم البريدي")); ?>
											</li>
                                         
                                            <li>
								<label for="email">كلمه السر</label>
								
                                 <?php echo form_password(array('name'=>'password','id'=>"email",'onblur'=>"if(this.value=='')this.value='البريد الالكتروني';" , 'onfocus'=>"if(this.value=='البريد الالكتروني')this.value='';", 'value'=>"البريد الالكتروني")); ?>
											</li>
                                            <li>
                                            <label for="email">تأكيد كلمه السر</label>
								 <?php echo form_password(array('name'=>'cpassword','id'=>"email",'onblur'=>"if(this.value=='')this.value='البريد الالكتروني';" , 'onfocus'=>"if(this.value=='البريد الالكتروني')this.value='';", 'value'=>"البريد الالكتروني")); ?>
											</li>
										</ul>
										<div class="centerdiv">
										<div class="cta-button optin small">
                                         <?php echo form_button(array('name'=>'button','class'=>"cta1"),'تسجيل')?>
                                      
											<span class="text"> من فضلك ادخل جميع بياناتك صحيحه لانه في حاله معرفه انها بيانات خاطئه يتم إيقاف العضويه تلقائيا</span>
											
										</div>
										</div>
									  <?php echo form_close();?>
								</div>
                </div>
                        
                        <div id="right">
                                             
    <div id="clear"></div>
<div id="adv_block" >
<h3 style="margin-top:-10px;">الرعاه</h3>

<div id="adv">
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
</div>
</div>
<div id="clear"></div>
                        
                        <div id="serv_block" >
<h3 style="margin-top:-10px;">الخدمات الاكثر ربحا</h3>
<div style="background-color:#5e8d03">
<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

</div>
<div id="clear"></div>

                        </div>
				</div>	
		</section>
				
			</div>		
		</section>
		<!-- end of section middle -->

		<!-- start of section bottom -->
		<?php include('footer.php')?>
		<!-- end of section bottom -->
		
	</div>
	<!-- end of wrapper -->

	</body>
	</html>