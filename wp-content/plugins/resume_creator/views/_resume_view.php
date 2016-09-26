  <style type="text/css">
    .basic_info_container{
      background-color: #1A1A1A;
      color: #fff !important;
      max-width: 464.6pt;
      padding: 0 65.2pt 0 65.2pt;
    }

    .basic_info{float: left;}
    .basic_info td p{color: #ffffff;}
    .basic_info td span{color: #ffffff;}
    .user_avatar{ float: right;}
    .user_avatar{ margin-right: -65.2pt;}
  </style>
<meta charset="UTF-8">
<div class="wrap">
<div class="basic_info_container">
    <div class="basic_info">
        <table class="c14">
            <tbody>
                <tr class="c8">
                    <td class="c27" colspan="2" rowspan="1">
                        <p class="c38 c41"><span class="c48"><img src="http://sherpaconsulting.no/dev/wp-content/themes/sherpaconsulting/images/sherpa-logo.png" width="100"></span>
                        </p>
                    </td>
                </tr>
                <tr class="c8">
                    <td class="c27" colspan="2" rowspan="1">
                        <p class="c38 c41"><span class="c48">CURRICILUM VITAE</span></p>
                    </td>
                </tr>
                <tr class="c8">
                    <td class="c27" colspan="2" rowspan="1">
                        <a id="id.30j0zll"></a>
                        <p class="c18"><span class="c44"><?php echo $umeta['first_name'][0] . ' ' . $umeta['last_name'][0]?></span></p>
                    </td>
                </tr>
                <tr class="c8">
                    <td class="c27" colspan="2" rowspan="1">
                        <p class="c41 c38"><span class="c17"><?php echo $basic_info['designation']?></span>
                        </p>
                    </td>
                </tr>
                <tr class="c53">
                    <td class="c29" colspan="1" rowspan="1">
                        <p class="c34"><span class="c33">F&Oslash;DSELSDATO </span>
                        </p>
                    </td>
                    <td class="c21" colspan="1" rowspan="1">
                        <p class="c38 c42 c50"><span class="c26"><?php echo $basic_info['birth_day']?></span>
                        </p>
                    </td>
                </tr>
                <tr class="c53">
                    <td class="c29" colspan="1" rowspan="1">
                        <p class="c34"><span class="c33">NASJONALITET</span>
                        </p>
                    </td>
                    <td class="c21" colspan="1" rowspan="1">
                        <p class="c50 c38 c42"><span class="c26"><?php echo $basic_info['nationality']?></span>
                        </p>
                    </td>
                </tr>
                <tr class="c53">
                    <td class="c29" colspan="1" rowspan="1">
                        <p class="c34"><span class="c33">SPR&Aring;K</span>
                        </p>
                    </td>
                    <td class="c21" colspan="1" rowspan="1">
                        <p class="c50 c38 c42"><span class="c26"><?php echo $basic_info['language']?></span>
                        </p>
                    </td>
                </tr>
                <tr class="c53">
                    <td class="c29" colspan="1" rowspan="1">
                        <p class="c34"><span class="c33">SIVILSTATUS</span>
                        </p>
                    </td>
                    <td class="c21" colspan="1" rowspan="1">
                        <p class="c50 c38 c42"><span class="c26"><?php echo $basic_info['civil_status']?></span>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="user_avatar">
        <?php echo get_avatar( $user->ID, 360); ?>
    </div>
    <div style="clear:both;"></div>
</div>
<div class="resume_view_wrapper c59">
    <?php if($umeta['description'][0]):?>
    <p class="c28"><span></span></p>
    <p class="c47 c38">
      <span class="c17"><?php echo nl2br($umeta['description'][0]);?></span>
    </p>
    <?php endif; ?>

    <?php if($rprojects):?>
    <h1 class="c24"><span></span></h1>
    <h1 class="c32"><span>SISTE PROSJEKTER</span></h1>
    <?php foreach ($rprojects['company_name'] as $index => $value): ?>
    <table class="c14">
        <tbody>
            <tr class="c8">
                <td class="c15" colspan="2" rowspan="1">
                    <h2 class="c39 c32"><span class="c5"><?php echo $rprojects['company_name'][$index]?></span></h2>
                </td>
            </tr>
            <?php if($rprojects['period'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Periode</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $rprojects['period'][$index]?></span>
                    </p>
                </td>
            </tr>
            <?php endif; ?>
            <?php if($rprojects['project_role'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Rolle</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $rprojects['project_role'][$index]?></span>
                    </p>
                </td>
            </tr>
            <?php endif; ?>
            <?php if($rprojects['project_name'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Prosjekt</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $rprojects['project_name'][$index]?></span>
                    </p>
                </td>
            </tr>
            <?php endif; ?>
            <?php if($rprojects['project_purpose'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Hensikt</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $rprojects['project_purpose'][$index]?></span>
                    </p>
                </td>
            </tr>
            <?php endif; ?>
            <?php if($rprojects['project_tasks'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1 c52">Leveranser / Oppgaver</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                <?php $tasksList = preg_split ('/$\R?^/m', $rprojects['project_tasks'][$index]);?>
                <ul>
                  <?php foreach($tasksList as $task): ?>
                    <li><p class="c4"><span class="c3"><?php echo $task;?></span></p></li>
                  <?php endforeach; ?>
                  </ul>
                </td>
            </tr>
            <?php endif; ?>
            <?php if($rprojects['project_technology'][$index]): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Teknologi</span>
                    </p>
                </td>
                <td class="c0" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9"><?php echo $rprojects['project_technology'][$index]?></span>
                    </p>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <p class="c28"><span></span></p>
    <p class="c28"><span></span></p>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php if($pprojects):?>
    <p class="c30 c28"><span></span></p>
    <h1 class="c32"><span>Tidligere prosjekter</span></h1>
    <table class="c14">
        <tbody>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">&Aring;r</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Kunde</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Prosjekt</span></p>
                </td>
            </tr>
            <?php foreach ($pprojects['company_name'] as $index => $value): ?>
             <tr class="c8">
                 <td class="c2" colspan="1" rowspan="1">
                     <p class="c7"><span class="c3"><?php echo $pprojects['year'][$index]?></span>
                     </p>
                 </td>
                 <td class="c35" colspan="1" rowspan="1">
                     <p class="c7"><span class="c3"><?php echo $pprojects['company_name'][$index]?></span></p>
                 </td>
                 <td class="c19" colspan="1" rowspan="1">
                     <p class="c7"><span class="c3"><?php echo nl2br($pprojects['project_details'][$index])?></span></p>
                 </td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <?php if($eemployers):?>
    <p class="c30 c28"><span class="c9"></span></p>
    <p class="c28"><span class="c51"></span></p>
    <h1 class="c32"><span>Tidligere arbeidsgivere</span></h1>
    <table class="c14">
        <tbody>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">&Aring;r</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Arbeidsgiver</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Stilling</span></p>
                </td>
            </tr>
            <?php foreach ($eemployers['employer_name'] as $index => $value): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $eemployers['year'][$index]?></span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $eemployers['employer_name'][$index]?></span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $eemployers['position'][$index]?></span></p>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <?php if($education):?>
    <h1 class="c24"><span></span></h1>
    <h1 class="c32"><span>Utdanning</span></h1>
    <table class="c14">
        <tbody>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">&Aring;r</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Skole</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c7"><span class="c1">Utdanning</span></p>
                </td>
            </tr>
            <?php foreach ($education['school_name'] as $index => $value): ?>
            <tr class="c8">
                <td class="c2" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $education['year'][$index]?></span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $education['school_name'][$index]?></span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo nl2br($education['education'][$index])?></span></p>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <?php if($courses):?>
    <h1 class="c24"><span class="c51 c54"></span></h1>
    <h1 class="c32"><span>Kurs</span></h1>
    <table class="c14">
        <tbody>
            <?php foreach ($courses['course_name'] as $index => $value): ?>
            <tr class="c57">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $courses['year'][$index]?></span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c7"><span class="c3"><?php echo $courses['course_name'][$index]?></span></p>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <?php if($solstice):?>
      <h1 class="c24"><span></span></h1>
      <h1 class="c32"><span>Verv</span></h1>
      <?php foreach ($solstice['solstice_name'] as $index => $value): ?>
        <p class="c6"><span class="c9"><?php echo $solstice['year'][$index] . ' '?> <?php echo $solstice['solstice_name'][$index]?></span></p>
      <?php endforeach; ?>
    <?php endif; ?>
    <?php if($esummary['experience_summary']):?>
      <p class="c30 c28"><span></span></p>
      <h1 class="c24"><span></span></h1>
      <p class="c28"><span class="c51"></span></p>
      <h1 class="c32"><span>Sammendrag prosjekterfaring</span></h1>
      <p class="c11"><span class="c9"><?php echo nl2br($esummary['experience_summary'])?></span></p>
    <?php endif; ?>
    <input type="hidden" id="user_id" value="<?php echo $_REQUEST['user']?>">
  </div> <!-- End of resume_view_wrapper div -->
</div> <!-- End of wrap div -->

<style type="text/css">
    @import url('https://themes.googleusercontent.com/fonts/css?kit=o8fe_2IjjzlbJto8g9sIhIpY1JdABG86DvGo3KDkyptV6vrXZsIOJgm_keKZFUoS96DS5O3vr1DzVEWo8-lwLw');
        ol.lst-kix_list_7-0 {
            list-style-type: none
        }
        ul.lst-kix_list_1-0 {
            list-style-type: none
        }
        ol.lst-kix_list_9-0.start {
            counter-reset: lst-ctn-kix_list_9-0 0
        }
        .lst-kix_list_3-0>li:before {
            content: "\0025cf  "
        }
        ul.lst-kix_list_5-7 {
            list-style-type: none
        }
        ul.lst-kix_list_9-3 {
            list-style-type: none
        }
        ul.lst-kix_list_5-8 {
            list-style-type: none
        }
        ul.lst-kix_list_9-4 {
            list-style-type: none
        }
        .lst-kix_list_3-1>li:before {
            content: " "
        }
        .lst-kix_list_3-2>li:before {
            content: " "
        }
        ul.lst-kix_list_5-5 {
            list-style-type: none
        }
        ul.lst-kix_list_9-1 {
            list-style-type: none
        }
        ul.lst-kix_list_5-6 {
            list-style-type: none
        }
        ul.lst-kix_list_9-2 {
            list-style-type: none
        }
        .lst-kix_list_8-1>li:before {
            content: " "
        }
        ul.lst-kix_list_9-7 {
            list-style-type: none
        }
        ul.lst-kix_list_9-8 {
            list-style-type: none
        }
        .lst-kix_list_8-2>li:before {
            content: " "
        }
        ul.lst-kix_list_9-5 {
            list-style-type: none
        }
        .lst-kix_list_6-0>li {
            counter-increment: lst-ctn-kix_list_6-0
        }
        .lst-kix_list_7-0>li {
            counter-increment: lst-ctn-kix_list_7-0
        }
        .lst-kix_list_8-0>li {
            counter-increment: lst-ctn-kix_list_8-0
        }
        .lst-kix_list_9-0>li {
            counter-increment: lst-ctn-kix_list_9-0
        }
        ul.lst-kix_list_9-6 {
            list-style-type: none
        }
        ul.lst-kix_list_1-3 {
            list-style-type: none
        }
        .lst-kix_list_3-5>li:before {
            content: " "
        }
        ul.lst-kix_list_5-0 {
            list-style-type: none
        }
        ul.lst-kix_list_1-4 {
            list-style-type: none
        }
        .lst-kix_list_10-0>li {
            counter-increment: lst-ctn-kix_list_10-0
        }
        ul.lst-kix_list_1-1 {
            list-style-type: none
        }
        .lst-kix_list_3-4>li:before {
            content: " "
        }
        ul.lst-kix_list_1-2 {
            list-style-type: none
        }
        ul.lst-kix_list_5-3 {
            list-style-type: none
        }
        ul.lst-kix_list_1-7 {
            list-style-type: none
        }
        .lst-kix_list_3-3>li:before {
            content: " "
        }
        ul.lst-kix_list_5-4 {
            list-style-type: none
        }
        ul.lst-kix_list_1-8 {
            list-style-type: none
        }
        ul.lst-kix_list_5-1 {
            list-style-type: none
        }
        .lst-kix_list_8-0>li:before {
            content: "" counter(lst-ctn-kix_list_8-0, decimal) ". "
        }
        ul.lst-kix_list_1-5 {
            list-style-type: none
        }
        ul.lst-kix_list_5-2 {
            list-style-type: none
        }
        ul.lst-kix_list_1-6 {
            list-style-type: none
        }
        .lst-kix_list_8-7>li:before {
            content: " "
        }
        .lst-kix_list_3-8>li:before {
            content: " "
        }
        .lst-kix_list_8-5>li:before {
            content: " "
        }
        .lst-kix_list_8-6>li:before {
            content: " "
        }
        .lst-kix_list_8-3>li:before {
            content: " "
        }
        .lst-kix_list_3-6>li:before {
            content: " "
        }
        .lst-kix_list_3-7>li:before {
            content: " "
        }
        .lst-kix_list_8-4>li:before {
            content: " "
        }
        .lst-kix_list_8-8>li:before {
            content: " "
        }
        .lst-kix_list_5-0>li:before {
            content: "\0025cf  "
        }
        ol.lst-kix_list_6-0 {
            list-style-type: none
        }
        .lst-kix_list_4-8>li:before {
            content: " "
        }
        .lst-kix_list_5-3>li:before {
            content: " "
        }
        .lst-kix_list_4-7>li:before {
            content: " "
        }
        .lst-kix_list_5-2>li:before {
            content: " "
        }
        .lst-kix_list_5-1>li:before {
            content: " "
        }
        ul.lst-kix_list_4-8 {
            list-style-type: none
        }
        .lst-kix_list_5-7>li:before {
            content: " "
        }
        ul.lst-kix_list_8-4 {
            list-style-type: none
        }
        ul.lst-kix_list_8-5 {
            list-style-type: none
        }
        ul.lst-kix_list_4-6 {
            list-style-type: none
        }
        .lst-kix_list_5-6>li:before {
            content: " "
        }
        .lst-kix_list_5-8>li:before {
            content: " "
        }
        ul.lst-kix_list_8-2 {
            list-style-type: none
        }
        ul.lst-kix_list_4-7 {
            list-style-type: none
        }
        ul.lst-kix_list_8-3 {
            list-style-type: none
        }
        ul.lst-kix_list_8-8 {
            list-style-type: none
        }
        ul.lst-kix_list_8-6 {
            list-style-type: none
        }
        ul.lst-kix_list_8-7 {
            list-style-type: none
        }
        ul.lst-kix_list_4-0 {
            list-style-type: none
        }
        ul.lst-kix_list_4-1 {
            list-style-type: none
        }
        .lst-kix_list_5-4>li:before {
            content: " "
        }
        ul.lst-kix_list_4-4 {
            list-style-type: none
        }
        .lst-kix_list_5-5>li:before {
            content: " "
        }
        ul.lst-kix_list_4-5 {
            list-style-type: none
        }
        ul.lst-kix_list_8-1 {
            list-style-type: none
        }
        ul.lst-kix_list_4-2 {
            list-style-type: none
        }
        ul.lst-kix_list_4-3 {
            list-style-type: none
        }
        .lst-kix_list_6-1>li:before {
            content: " "
        }
        .lst-kix_list_6-3>li:before {
            content: " "
        }
        .lst-kix_list_6-0>li:before {
            content: "" counter(lst-ctn-kix_list_6-0, decimal) ". "
        }
        .lst-kix_list_6-4>li:before {
            content: " "
        }
        .lst-kix_list_6-2>li:before {
            content: " "
        }
        .lst-kix_list_6-8>li:before {
            content: " "
        }
        ol.lst-kix_list_8-0.start {
            counter-reset: lst-ctn-kix_list_8-0 0
        }
        .lst-kix_list_6-5>li:before {
            content: " "
        }
        .lst-kix_list_6-7>li:before {
            content: " "
        }
        .lst-kix_list_7-0>li:before {
            content: "" counter(lst-ctn-kix_list_7-0, decimal) ". "
        }
        .lst-kix_list_6-6>li:before {
            content: " "
        }
        .lst-kix_list_2-6>li:before {
            content: " "
        }
        .lst-kix_list_2-7>li:before {
            content: " "
        }
        .lst-kix_list_7-4>li:before {
            content: " "
        }
        .lst-kix_list_7-6>li:before {
            content: " "
        }
        .lst-kix_list_2-4>li:before {
            content: " "
        }
        .lst-kix_list_2-5>li:before {
            content: " "
        }
        .lst-kix_list_2-8>li:before {
            content: " "
        }
        .lst-kix_list_7-1>li:before {
            content: " "
        }
        .lst-kix_list_7-5>li:before {
            content: " "
        }
        .lst-kix_list_7-2>li:before {
            content: " "
        }
        .lst-kix_list_7-3>li:before {
            content: " "
        }
        ul.lst-kix_list_7-5 {
            list-style-type: none
        }
        .lst-kix_list_10-0>li:before {
            content: "" counter(lst-ctn-kix_list_10-0, decimal) ". "
        }
        ul.lst-kix_list_7-6 {
            list-style-type: none
        }
        ul.lst-kix_list_7-3 {
            list-style-type: none
        }
        ul.lst-kix_list_3-7 {
            list-style-type: none
        }
        ul.lst-kix_list_7-4 {
            list-style-type: none
        }
        ul.lst-kix_list_3-8 {
            list-style-type: none
        }
        .lst-kix_list_10-1>li:before {
            content: " "
        }
        ul.lst-kix_list_7-7 {
            list-style-type: none
        }
        ul.lst-kix_list_7-8 {
            list-style-type: none
        }
        ul.lst-kix_list_3-1 {
            list-style-type: none
        }
        ul.lst-kix_list_3-2 {
            list-style-type: none
        }
        .lst-kix_list_7-8>li:before {
            content: " "
        }
        ul.lst-kix_list_3-0 {
            list-style-type: none
        }
        ul.lst-kix_list_7-1 {
            list-style-type: none
        }
        ul.lst-kix_list_3-5 {
            list-style-type: none
        }
        ul.lst-kix_list_7-2 {
            list-style-type: none
        }
        ol.lst-kix_list_9-0 {
            list-style-type: none
        }
        ul.lst-kix_list_3-6 {
            list-style-type: none
        }
        ul.lst-kix_list_3-3 {
            list-style-type: none
        }
        .lst-kix_list_7-7>li:before {
            content: " "
        }
        ul.lst-kix_list_3-4 {
            list-style-type: none
        }
        ol.lst-kix_list_10-0.start {
            counter-reset: lst-ctn-kix_list_10-0 0
        }
        .lst-kix_list_10-7>li:before {
            content: " "
        }
        .lst-kix_list_10-5>li:before {
            content: " "
        }
        .lst-kix_list_10-4>li:before {
            content: " "
        }
        .lst-kix_list_10-8>li:before {
            content: " "
        }
        .lst-kix_list_4-0>li:before {
            content: "\0025cf  "
        }
        .lst-kix_list_10-3>li:before {
            content: " "
        }
        .lst-kix_list_4-1>li:before {
            content: " "
        }
        .lst-kix_list_10-2>li:before {
            content: " "
        }
        .lst-kix_list_4-4>li:before {
            content: " "
        }
        .lst-kix_list_9-2>li:before {
            content: " "
        }
        .lst-kix_list_4-3>li:before {
            content: " "
        }
        .lst-kix_list_4-5>li:before {
            content: " "
        }
        .lst-kix_list_4-2>li:before {
            content: " "
        }
        .lst-kix_list_4-6>li:before {
            content: " "
        }
        .lst-kix_list_9-3>li:before {
            content: " "
        }
        ol.lst-kix_list_7-0.start {
            counter-reset: lst-ctn-kix_list_7-0 0
        }
        .lst-kix_list_9-0>li:before {
            content: "" counter(lst-ctn-kix_list_9-0, decimal) ". "
        }
        .lst-kix_list_10-6>li:before {
            content: " "
        }
        .lst-kix_list_9-1>li:before {
            content: " "
        }
        .lst-kix_list_9-7>li:before {
            content: " "
        }
        .lst-kix_list_9-6>li:before {
            content: " "
        }
        .lst-kix_list_9-4>li:before {
            content: " "
        }
        .lst-kix_list_9-5>li:before {
            content: " "
        }
        ul.lst-kix_list_6-6 {
            list-style-type: none
        }
        ul.lst-kix_list_6-7 {
            list-style-type: none
        }
        ol.lst-kix_list_10-0 {
            list-style-type: none
        }
        ul.lst-kix_list_6-4 {
            list-style-type: none
        }
        ul.lst-kix_list_2-8 {
            list-style-type: none
        }
        ul.lst-kix_list_6-5 {
            list-style-type: none
        }
        ul.lst-kix_list_6-8 {
            list-style-type: none
        }
        ul.lst-kix_list_2-2 {
            list-style-type: none
        }
        .lst-kix_list_1-0>li:before {
            content: "\0025cf  "
        }
        ul.lst-kix_list_2-3 {
            list-style-type: none
        }
        ul.lst-kix_list_2-0 {
            list-style-type: none
        }
        ul.lst-kix_list_2-1 {
            list-style-type: none
        }
        ul.lst-kix_list_6-2 {
            list-style-type: none
        }
        ol.lst-kix_list_8-0 {
            list-style-type: none
        }
        .lst-kix_list_9-8>li:before {
            content: " "
        }
        ul.lst-kix_list_2-6 {
            list-style-type: none
        }
        ul.lst-kix_list_6-3 {
            list-style-type: none
        }
        .lst-kix_list_1-1>li:before {
            content: " "
        }
        .lst-kix_list_1-2>li:before {
            content: " "
        }
        ul.lst-kix_list_2-7 {
            list-style-type: none
        }
        ul.lst-kix_list_2-4 {
            list-style-type: none
        }
        ul.lst-kix_list_6-1 {
            list-style-type: none
        }
        ul.lst-kix_list_2-5 {
            list-style-type: none
        }
        .lst-kix_list_1-3>li:before {
            content: " "
        }
        .lst-kix_list_1-4>li:before {
            content: " "
        }
        ul.lst-kix_list_10-8 {
            list-style-type: none
        }
        ul.lst-kix_list_10-7 {
            list-style-type: none
        }
        .lst-kix_list_1-7>li:before {
            content: " "
        }
        ul.lst-kix_list_10-6 {
            list-style-type: none
        }
        ul.lst-kix_list_10-5 {
            list-style-type: none
        }
        ul.lst-kix_list_10-4 {
            list-style-type: none
        }
        ul.lst-kix_list_10-3 {
            list-style-type: none
        }
        .lst-kix_list_1-5>li:before {
            content: " "
        }
        .lst-kix_list_1-6>li:before {
            content: " "
        }
        ul.lst-kix_list_10-2 {
            list-style-type: none
        }
        ul.lst-kix_list_10-1 {
            list-style-type: none
        }
        .lst-kix_list_2-0>li:before {
            content: "\002013  "
        }
        .lst-kix_list_2-1>li:before {
            content: " "
        }
        ol.lst-kix_list_6-0.start {
            counter-reset: lst-ctn-kix_list_6-0 0
        }
        .lst-kix_list_1-8>li:before {
            content: " "
        }
        .lst-kix_list_2-2>li:before {
            content: " "
        }
        .lst-kix_list_2-3>li:before {
            content: " "
        }
        ol {
            margin: 0;
            padding: 0
        }
        table td,
        table th {
            padding: 0
        }
        .c10 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 73.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c12 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 403.9pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c46 {
            border-right-style: solid;
            padding: 2.9pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 233.1pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c35 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 119.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c0 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 406.1pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c27 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 239.3pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c15 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 477.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c19 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 286.6pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c2 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 71.7pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c55 {
            border-right-style: solid;
            padding: 2.9pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 231.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c29 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 83.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c21 {
            border-right-style: solid;
            padding: 0pt 5.8pt 0pt 5.8pt;
            border-bottom-color: #000000;
            border-top-width: 0pt;
            border-right-width: 0pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 0pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 0pt;
            width: 155.6pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }
        .c4 {
            margin-left: 11.3pt;
            padding-top: 0pt;
            text-indent: -11.3pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        .c5 {
            color: #d2232a;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Nobile";
            font-style: normal
        }
        .c6 {
            margin-left: 11.3pt;
            padding-top: 0pt;
            text-indent: -11.3pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2
        }
        .c20 {
            margin-left: 22.7pt;
            padding-top: 0pt;
            text-indent: -11.3pt;
            padding-bottom: 0pt;
            line-height: 0.9;
            orphans: 2;
            widows: 2
        }
        .c44 {
            color: #000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 28pt;
            font-family: "Playfair Display";
            font-style: normal
        }
        .c11 {
            margin-left: 11.3pt;
            padding-top: 0pt;
            text-indent: -11.3pt;
            padding-bottom: 0pt;
            line-height: 1.3;
            orphans: 2;
            widows: 2
        }
        .c3 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Playfair Display";
            font-style: normal
        }
        .c49 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 14pt;
            font-family: "Playfair Display";
            font-style: normal
        }
        .c34 {
            padding-top: 6pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        .c7 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.2;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        .c18 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 0.7000000000000001;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        .c25 {
            padding-top: 0pt;
            padding-bottom: 20.7pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2
        }
        .c23 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2
        }
        .c13 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            text-align: left;
            height: 10pt
        }
        .c37 {
            font-size: 8pt;
            font-family: "Nobile";
            color: #7f7f7f;
            font-weight: 400
        }
        .c24 {
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            height: 14pt
        }
        .c39 {
            padding-top: 0pt;
            padding-bottom: 4pt;
            line-height: 1.0;
            text-align: left
        }
        .c41 {
            padding-top: 0pt;
            padding-bottom: 2pt;
            line-height: 1.0;
            text-align: left
        }
        .c33 {
            font-size: 9pt;
            font-family: "Nobile";
            color: #f79646;
            font-weight: 400
        }
        .c14 {
            margin-left: -5.8pt;
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }
        .c1 {
            font-size: 7pt;
            font-family: "Nobile";
            color: #808080;
            font-weight: 400
        }
        .c31 {
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            height: 12pt
        }
        .c48 {
            font-size: 10.5pt;
            font-family: "Nobile";
            color: #f79646;
            font-weight: 400
        }
        .c52 {
            text-decoration: none;
            vertical-align: baseline;
            font-style: normal
        }
        .c26 {
            font-size: 9pt;
            font-family: "Playfair Display";
            font-weight: 400
        }
        .c30 {
            padding-top: 0pt;
            padding-bottom: 12pt;
            line-height: 1.0
        }
        .c59 {
            background-color: #ffffff;
            max-width: 464.6pt;
            padding: 66.6pt 65.2pt 42.5pt 65.2pt
        }
        .c32 {
            page-break-after: avoid;
            orphans: 2;
            widows: 2
        }
        .c40 {
            margin-left: 11.3pt;
            text-indent: -11.3pt;
            text-align: left
        }
        .c28 {
            orphans: 2;
            widows: 2;
            height: 10pt
        }
        .c47 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.2
        }
        .c58 {
            padding-top: 35.5pt;
            padding-bottom: 0pt;
            line-height: 1.0
        }
        .c17 {
            font-size: 13pt;
            font-family: "Playfair Display";
            font-weight: 400
        }
        .c9 {
            font-size: 10pt;
            font-family: "Playfair Display";
            font-weight: 400
        }
        .c50 {
            padding-top: 4pt;
            padding-bottom: 0pt;
            line-height: 1.0
        }
        .c38 {
            orphans: 2;
            widows: 2
        }
        .c22 {
            margin-left: 11.3pt;
            height: 10pt
        }
        .c43 {
            color: inherit;
            text-decoration: inherit
        }
        .c51 {
            font-size: 14pt;
            font-weight: 700
        }
        .c42 {
            text-align: left
        }
        .c56 {
            line-height: 0.9
        }
        .c57 {
            height: 4pt
        }
        .c45 {
            height: 10pt
        }
        .c16 {
            height: 25pt
        }
        .c36 {
            height: 14pt
        }
        .c53 {
            height: 11pt
        }
        .c54 {
            font-family: "Playfair Display"
        }
        .c8 {
            height: 0pt
        }
        .title {
            padding-top: 0pt;
            color: #f79646;
            font-size: 10.5pt;
            padding-bottom: 2pt;
            font-family: "Arial";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        .subtitle {
            padding-top: 18pt;
            color: #666666;
            font-size: 24pt;
            padding-bottom: 4pt;
            font-family: "Georgia";
            line-height: 1.0;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        li {
            color: #000000;
            font-size: 10pt;
            font-family: "Playfair Display"
        }
        p {
            margin: 0;
            color: #000000;
            font-size: 10pt;
            font-family: "Playfair Display"
        }
        h1 {
            padding-top: 0pt;
            color: #000000;
            font-weight: 700;
            font-size: 14pt;
            padding-bottom: 12pt;
            font-family: "Playfair Display";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        h2 {
            padding-top: 0pt;
            color: #d2232a;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Nobile";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        h3 {
            padding-top: 14pt;
            color: #000000;
            font-weight: 700;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Playfair Display";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        h4 {
            padding-top: 12pt;
            color: #000000;
            font-weight: 700;
            font-size: 12pt;
            padding-bottom: 2pt;
            font-family: "Playfair Display";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        h5 {
            padding-top: 11pt;
            color: #000000;
            font-weight: 700;
            font-size: 11pt;
            padding-bottom: 2pt;
            font-family: "Playfair Display";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }
        h6 {
            padding-top: 10pt;
            color: #000000;
            font-weight: 700;
            font-size: 10pt;
            padding-bottom: 2pt;
            font-family: "Playfair Display";
            line-height: 1.0;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

  .resume_view_wrapper{
    padding-top: 30pt;
  }

  .resume_view_wrapper ul{
    list-style: disc;
    padding: 0 15px;
    margin: 0;
  }

  .resume_view_wrapper ul li{
    margin-bottom: 0;
  }
</style>