<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!--banner-->
<section class="zhibao-banner-wrap">
   
   <div class="zhibao-banner wow fadeInUp bg-red animated" id="zhibao-banner">
       靠科技创盛航品牌，凭质量赢顾客满意 <br/><br/>
   </div>
   <div class="zhibao-banner-line  wow fadeInUp bg-red animated"></div>
   
</section>
<!--banner end -->
<!--zhibao-->
<!--fuwu chengnuo-->
<section class="zhibao-fuwu-nuo m9 m-auto">
    <div class="title">服务承诺</div>
    <div class="title-en">Featured Service</div>
    <div class="fuwu-readme-wrap">
        <!--left-->
        <div class="fuwu-pic-wrap">
            <span></span>
            <?php if (is_array($attachment)) { $count=count($attachment);foreach ($attachment as $i=>$t) { ?>
            <div>
                 <img src="<?php echo dr_thumb($t['file'], 400,300); ?>" alt="">
            </div>
            <?php } } ?>
           
        </div>
        <!--left end-->
        <!--right-->
        <div class="fuwu-text-wrap">
            <div class="text-title">Technology High Quality CreDibility</div>
            <div class="m-text">
                <p>
                    盛航密封产品质量方面不屈于价位的压力,虽然市场竞争激烈，但绝不因此而降低产品质量。产品质量实行三包（包修、包换、包退）期限一年，
                    一年内因产品质量出现问题（包修、包换）无偿提供零配件，一年后酌情收取成本费，盛航公司提供终生保修及配件。若我方无能力处理好质量问题则一年内包退。
                </p>
                <p>
                    盛航密封售后服务部将为用户建立售后服务跟踪档案，每月定期检查，及时收集反馈停息，提高产品的质量。
                </p>
            </div>
        </div>
        <div class="clear"></div>
        <!--right end-->
    </div>
</section>
<!--fuwu chengnuo end-->
<section class="zhibao-shouhou-fuwu-wrap">
    <div class="zhibao-shouhou-fuwu m9 m-auto">
        <div class="top-sanjiao"></div>
        <div class="title">售后服务</div>
        <div class="title-en">After-saels Service</div>
        <div class="shouhou-tab-wrap">
            <div class="shouhou-tab-nav">
                <a href="javascript:void(0);" class="on" data-t="1">
                    <i class="fa fa-gear"></i>
                </a>
                <a href="javascript:void(0);" class="" data-t="2">
                    <i class="fa fa-paper-plane"></i>
                </a>
                <a href="javascript:void(0);" class="" data-t="3">
                    <i class="fa fa-wrench"></i>
                </a>
                <a href="javascript:void(0);" class="" data-t="4">
                     <i class="fa fa-user"></i>
                </a>
            </div>
            <div class="shouhou-tab-main" >
                <div class="shouhou-tab-1" style="display:block">
                    <table>
                        <tr>
                            <td>
                                本公司所生产的产品均达到严格的企业标准和国家机械部标准。
                            </td>
                        </tr>
                    </table>
                    
                </div>
                <div class="shouhou-tab-2">
                    <table>
                        <tr>
                            <td>
                            本公司接到定单通知后，严格按照合同条款的有关规定进行发货，保证产品完好无损，按要求的时间，地点送到。
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="shouhou-tab-3">
                    <table>
                        <tr>
                            <td>
                                在保修期内，产品确因质量问题而引起损坏或不正常工作，本公司负责免费修理或调换，并提供有关的保养维修知识；
                                如因用户使用不当或在保修期外，而引起坏损或不正常工作，本公司对产品提供终身维修服务。
                                用户如有需要，本公司免费提供咨询，现场指导安装调试。
                            </td>
                         </tr>
                     </table>
                </div>
                <div class="shouhou-tab-4">
                    <table>
                        <tr>
                            <td>
                            用户在使用本公司产品的过程当中所出现的问题或信息，请及时反馈本公司，以便本公司及时予以处理改进和提高。
                            本公司提供优质的售后服务，客户所提问题必须在6小时内给予答复或解决。
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
                  <script type="text/javascript" src="http://wubu.app/index.php?c=cron"></script>