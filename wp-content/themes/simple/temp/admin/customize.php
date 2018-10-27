<?php
global $wp_customize;
$original_site = get_option( 'original_site');

$wp_customize->add_section( 'site_section', array(
'title'          =>'【共通】オリジナル設定',
'priority'       => 100,
));


/* 設定を追加 */
$wp_customize->add_setting('site_options[select-t]', array('type'  => 'option',));
$wp_customize->add_control( 'select1', array(
'settings' => 'site_options[select-t]',
'label' =>'■文字サイズ',
'section' => 'site_section',
'type' => 'select',
'priority'   => 10,
'choices'    => array(
'12px' => '12px',
'13px' => '13px',
'14px' => '14px',
'15px' => '15px',
'16px' => '16px',
'17px' => '17px',
'18px' => '18px',
'19px' => '19px',
'20px' => '20px',
),
));

$wp_customize->add_setting( 'site_options[color-t]', array(
'default' => '#555555','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-t]',array(
'settings' => 'site_options[color-t]',
'label' => '■文字色',
'description' =>'※リンクされている文字は除く',
'section' => 'site_section',
'priority'   => 20,
)));

$wp_customize->add_setting( 'site_options[color-t-l]', array(
'default' => '#555555','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-t-l]',array(
'settings' => 'site_options[color-t-l]',
'label' => '■タイトルリンク色',
'section' => 'site_section',
'priority'   => 30,
)));

$wp_customize->add_setting( 'site_options[color-tag]', array(
'default' => '#729abf','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-tag]',array(
'settings' => 'site_options[color-tag]',
'label' => '■ボタン関連の背景色',
'description' =>'※ページナビ・タグクラウド・ボタンなど、ウィジェット設定時に有効',
'section' => 'site_section',
'priority'   => 40,
)));

$wp_customize->add_setting( 'site_options[color-lnk]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-lnk]',array(
'settings' => 'site_options[color-lnk]',
'label' => '■ボタン関連のリンク色',
'description' =>'※ページナビ・タグクラウド・ボタンなど、ウィジェット設定時に有効',
'section' => 'site_section',
'priority'   => 50,
)));

$wp_customize->add_setting( 'site_options[color-icon]', array(
'default' => '#999999','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-icon]',array(
'settings' => 'site_options[color-icon]',
'label' => '■アイコンの色',
'section' => 'site_section',
'priority'   => 60,
)));

$wp_customize->add_setting( 'site_options[color-rank-b]', array(
'default' => '#729abf','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-rank-b]',array(
'settings' => 'site_options[color-rank-b]',
'label' => '■ランキングの背景色',
'description' =>'※3位までの指定が可能<br />※ウィジェット設定時に有効',
'section' => 'site_section',
'priority'   => 70,
)));

$wp_customize->add_setting( 'site_options[color-rank-t]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-rank-t]',array(
'settings' => 'site_options[color-rank-t]',
'label' => '■ランキングの文字色',
'description' =>'※3位までの指定が可能<br />※ウィジェット設定時に有効',
'section' => 'site_section',
'priority'   => 80,
)));

//背景の色
$wp_customize->add_setting( 'site_options[color-main]', array(
'default' => '#f9f9f9','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-main]',array(
'settings' => 'site_options[color-main]',
'label' => '■背景色',
'description' =>'※背景画像を指定した場合、背景画像の下に表示されます',
'section' => 'site_section',
'priority'   => 90,
)));

//背景の画像
$wp_customize->add_setting('site_options[img-b]', array(
'capability' => 'edit_theme_options','type'       => 'option',));
$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize, 'site_options[img-b]', array(
'settings' => 'site_options[img-b]',
'label' => '■背景画像',
'description' =>'※背景画像を指定した場合、背景色の上に表示されます',
'section'  => 'site_section',
'priority'   => 100,
)));

//背景の調整
$wp_customize->add_setting('site_options[radio-1]', array('type'  => 'option',));
$wp_customize->add_control( 'radio-1', array(
'settings' => 'site_options[radio-1]',
'label' =>'■背景画像 【背景の繰り返し】',

'description' =>'※背景画像オプション',

'section' => 'site_section',
'type' => 'radio',
'choices'    => array(
'background-repeat:no-repeat;' => '繰り返しなし',
'background-repeat:repeat;' => 'タイル',
'background-repeat:repeat-x;' => '水平方向に繰り返し',
'background-repeat:repeat-y;' => '垂直方向に繰り返し',
),
'priority'   => 110,
));

//背景の調整
$wp_customize->add_setting('site_options[radio-2]', array('type'  => 'option',));
$wp_customize->add_control( 'radio-2', array(
'settings' => 'site_options[radio-2]',
'label' =>'■背景画像 【背景の位置】',
'description' =>'※背景画像オプション',
'section' => 'site_section',
'type' => 'radio',
'choices'    => array(
'background-position:top left;' => '左',
'background-position:top center;' => '中央',
'background-position:top right;' => '右',
),
'priority'   => 120,
));


//背景のスクロール
$wp_customize->add_setting('site_options[radio-3]', array('type'  => 'option',));
$wp_customize->add_control( 'radio-3', array(
'settings' => 'site_options[radio-3]',
'label' =>'■背景画像 【背景の位置】',
'description' =>'※背景画像オプション',
'section' => 'site_section',
'type' => 'radio',

'choices'    => array(
'background-attachment:scroll;' => 'スクロール',
'background-attachment:fixed;' => '固定',
),
'priority'   => 130,
));

$wp_customize->add_setting('site_options[header_size]', array('type'  => 'option',));
$wp_customize->add_control( 'header_size', array(
'settings' => 'site_options[header_size]',
'label' =>'■最大幅の指定【ヘッダー】',
'description' =>'※単位px',
'section' => 'site_section',
'type' => 'text',
'priority'   => 140,
));

$wp_customize->add_setting('site_options[content_size]', array('type'  => 'option',));
$wp_customize->add_control( 'content_size', array(
'settings' => 'site_options[content_size]',
'label' =>'■最大幅の指定【コンテンツ】',
'description' =>'※単位px',
'section' => 'site_section',
'type' => 'text',
'priority'   => 150,
));

$wp_customize->add_setting('site_options[footer_size]', array('type'  => 'option',));
$wp_customize->add_control( 'footer_size', array(
'settings' => 'site_options[footer_size]',
'label' =>'■最大幅の指定【フッター】',
'section' => 'site_section',
'type' => 'text',
'description' =>'※単位px',
'priority'   => 160,
));

//ヘッダー設定----------------------------------------------------------------------------------------------------------------------------
$wp_customize->add_section( 'site_section2', array(
'title'          =>'【ヘッダー】オリジナル設定',
'priority'       => 100,
));

$wp_customize->add_setting('site_options[logos]', array(
'capability' => 'edit_theme_options',
'type' => 'option',));
$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize, 'site_options[logos]', array(
'settings' => 'site_options[logos]',
'label' => '■ロゴのアップロード',
'section'  => 'site_section2',
'priority'   => 10,
'description' =>'最大サイズ ： 200px × 50px<br />【Retina対策(スマホでロゴがボヤけて見えてしまう)】対策をする場合、実際表示するサイズの約2倍のサイズをアップロード<br />
<a target="_blank" href="'.esc_url(admin_url( 'options-general.php?page=original_option' )).'">Retinaロゴ設定はこちら</a>',
)));

$wp_customize->add_setting( 'site_options[color-h]', array(
'default' => '#729abf','type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-h]',array(
'settings' => 'site_options[color-h]',
'label' => '■背景色',
'section' => 'site_section2',
'priority'   => 20,
)));


//サイト名テキストサイズ
$wp_customize->add_setting('site_options[select-t-t]', array('type'  => 'option',));
$wp_customize->add_control( 'select3', array(
'settings' => 'site_options[select-t-t]',
'label' =>'■サイト名の文字サイズ',
'section' => 'site_section2',
'type' => 'select',
'priority'   => 30,
'choices'    => array(
'10px' => '10px',
'11px' => '11px',
'12px' => '12px',
'13px' => '13px',
'14px' => '14px',
'15px' => '15px',
'16px' => '16px',
'17px' => '17px',
'18px' => '18px',
'19px' => '19px',
'20px' => '20px',
'21px' => '21px',
'22px' => '22px',
'23px' => '23px',
'24px' => '24px',
'25px' => '25px',
'26px' => '26px',
'27px' => '27px',
'28px' => '28px',
'29px' => '29px',
'30px' => '30px',
'31px' => '31px',
'32px' => '32px',
'33px' => '33px',
'34px' => '34px',
'35px' => '35px',
'36px' => '36px',
'37px' => '37px',
'38px' => '38px',
'39px' => '39px',
'40px' => '40px',
),
));

$wp_customize->add_setting( 'site_options[color-l-l]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-l-l]',array(
'settings' => 'site_options[color-l-l]',
'label' => '■サイト名の文字色',
'section' => 'site_section2',
'priority'   => 40,
)));



$wp_customize->add_setting('site_options[select-t-op]', array('type'  => 'option',));
$wp_customize->add_control( 'select-t-op', array(
'settings' => 'site_options[select-t-op]',
'label' =>'■サイト説明文表示設定',
'section' => 'site_section2',
'type' => 'radio',
'choices'    => array(
'' => 'PC版・スマートフォン版',
'1' => 'PC版のみ',
),
'priority'   => 45,
));


$select_t_h_num='';
for ($num = 5; $num < 20; $num++){
$select_t_h_num .= '"'.$num.'px" => "'.$num.'px",';
}





//サイト説明文テキストサイズ
$wp_customize->add_setting('site_options[select-t-h]', array('type'  => 'option',));
$wp_customize->add_control( 'select2', array(
'settings' => 'site_options[select-t-h]',
'label' =>'■サイト説明文の文字サイズ',
'section' => 'site_section2',
'type' => 'select',
'priority'   => 50,
'choices'    => array(
'10px' => '10px',
'11px' => '11px',
'12px' => '12px',
'13px' => '13px',
'14px' => '14px',
'15px' => '15px',
'16px' => '16px',
'17px' => '17px',
'18px' => '18px',
'19px' => '19px',
'20px' => '20px',
'21px' => '21px',
'22px' => '22px',
'23px' => '23px',
'24px' => '24px',
'25px' => '25px',
),
));

$wp_customize->add_setting( 'site_options[color-h-t]', array(
'default' => '#cccccc','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-h-t]',array(
'settings' => 'site_options[color-h-t]',
'label' => '■説明文の文字色',
'section' => 'site_section2',
'priority'   => 60,
)));

$wp_customize->add_setting( 'site_options[color-h-t-b]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-h-t-b]',array(
'settings' => 'site_options[color-h-t-b]',
'label' => '■説明文の背景色',
'section' => 'site_section2',
'priority'   => 65,
)));

if($original_site['original_op0']== 1){
$wp_customize->add_setting('site_options[select-cat-t]', array('type'  => 'option',));
$wp_customize->add_control( 'select-cat-t', array(
'settings' => 'site_options[select-cat-t]',
'label' =>'■メニュー 文字サイズ',
'section' => 'site_section2',
'type' => 'select',
'priority'   => 70,
'choices'    => array(
'10px' => '10px',
'11px' => '11px',
'12px' => '12px',
'13px' => '13px',
'14px' => '14px',
'15px' => '15px',
'16px' => '16px',
'17px' => '17px',
'18px' => '18px',
'19px' => '19px',
'20px' => '20px',
),
));

$wp_customize->add_setting( 'site_options[color-cat-l]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-l]',array(
'settings' => 'site_options[color-cat-l]',
'label' => '■メニュー 文字色',
'section' => 'site_section2',
'priority'   => 80,
)));

}



$wp_customize->add_setting('site_options[select-t-size]', array('type'  => 'option',));
$wp_customize->add_control( 'select-t-size', array(
'settings' => 'site_options[select-t-size]',
'label' =>'■メニュー サイズ',
'section' => 'site_section2',
'type' => 'select',
'description' =>'PC版のみ',
'priority' => 84,
'choices'  => array(
'0%' => '0%','1%' => '1%','2%' => '2%','3%' => '3%','4%' => '4%','5%' => '5%','6%' => '6%','7%' => '7%','8%' => '8%','9%' => '9%','10%' => '10%','11%' => '11%','12%' => '12%','13%' => '13%','14%' => '14%','15%' => '15%','16%' => '16%','17%' => '17%','18%' => '18%','19%' => '19%','20%' => '20%','21%' => '21%','22%' => '22%','23%' => '23%','24%' => '24%','25%' => '25%','26%' => '26%','27%' => '27%','28%' => '28%','29%' => '29%','30%' => '30%','31%' => '31%','32%' => '32%','33%' => '33%','34%' => '34%','35%' => '35%','36%' => '36%','37%' => '37%','38%' => '38%','39%' => '39%','40%' => '40%','41%' => '41%','42%' => '42%','43%' => '43%','44%' => '44%','45%' => '45%','46%' => '46%','47%' => '47%','48%' => '48%','49%' => '49%','50%' => '50%','51%' => '51%','52%' => '52%','53%' => '53%','54%' => '54%','55%' => '55%','56%' => '56%','57%' => '57%','58%' => '58%','59%' => '59%','60%' => '60%','61%' => '61%','62%' => '62%','63%' => '63%','64%' => '64%','65%' => '65%','66%' => '66%','67%' => '67%','68%' => '68%','69%' => '69%','70%' => '70%','71%' => '71%','72%' => '72%','73%' => '73%','74%' => '74%','75%' => '75%'
),
));


$wp_customize->add_setting('site_options[select-t-margin]', array('type'  => 'option',));
$wp_customize->add_control( 'select-t-margin', array(
'settings' => 'site_options[select-t-margin]',
'label' =>'■メニュー 位置',
'description' =>'PC版のみ',
'section' => 'site_section2',
'type' => 'select',
'priority' => 85,
'choices'  => array(
'0%' => '0%','1%' => '1%','2%' => '2%','3%' => '3%','4%' => '4%','5%' => '5%','6%' => '6%','7%' => '7%','8%' => '8%','9%' => '9%','10%' => '10%','11%' => '11%','12%' => '12%','13%' => '13%','14%' => '14%','15%' => '15%','16%' => '16%','17%' => '17%','18%' => '18%','19%' => '19%','20%' => '20%','21%' => '21%','22%' => '22%','23%' => '23%','24%' => '24%','25%' => '25%','26%' => '26%','27%' => '27%','28%' => '28%','29%' => '29%','30%' => '30%','31%' => '31%','32%' => '32%','33%' => '33%','34%' => '34%','35%' => '35%','36%' => '36%','37%' => '37%','38%' => '38%','39%' => '39%','40%' => '40%','41%' => '41%','42%' => '42%','43%' => '43%','44%' => '44%','45%' => '45%','46%' => '46%','47%' => '47%','48%' => '48%','49%' => '49%','50%' => '50%','51%' => '51%','52%' => '52%','53%' => '53%','54%' => '54%','55%' => '55%','56%' => '56%','57%' => '57%','58%' => '58%','59%' => '59%','60%' => '60%'
),
));


$wp_customize->add_setting( 'site_options[color-p]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-p]',array(
'settings' => 'site_options[color-p]',
'label' => '■パンくずの背景',
'section' => 'site_section2',
'priority'   => 90,
)));

$wp_customize->add_setting( 'site_options[color-p-t]', array(
'default' => '#555555','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-p-t]',array(
'settings' => 'site_options[color-p-t]',
'label' => '■パンくずのリンク色',
'section' => 'site_section2',
'priority'   => 100,
)));

$wp_customize->add_setting( 'site_options[color-p-i]', array(
'default' => '#cccccc','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-p-i]',array(
'settings' => 'site_options[color-p-i]',
'label' => '■パンくずのアイコン色',
'section' => 'site_section2',
'priority'   => 110,
)));


//サイドバー設定----------------------------------------------------------------------------------------------------------------------------
$wp_customize->add_section( 'site_section3', array(
'title'          =>'【サイドバー】オリジナル設定',
'priority'       => 100,
));


$wp_customize->add_setting('site_options[sidebar-link]', array('type'  => 'option',));
$wp_customize->add_control( 'sidebar-link', array(
'settings' => 'site_options[sidebar-link]',
'label' =>'■リンク太字設定(2カラム)',
'section' => 'site_section3',
'type' => 'radio',
'choices'    => array(
'' => 'ノーマル設定',
'1' => 'タイトルのみ太字',
'2' => 'リンクすべて太字',
),
'priority'   => 10,
));



$wp_customize->add_setting( 'site_options[color-s-b]', array(
'type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-s-b]',array(
'settings' => 'site_options[color-s-b]',
'label' => '■背景色',
'description' =>'背景を消したい場合は「クリア」をクリック',
'section' => 'site_section3',
'priority'   => 20,
)));

$wp_customize->add_setting( 'site_options[color-s]', array(
'default' => '#cccccc','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-s]',array(
'settings' => 'site_options[color-s]',
'label' => '■バーの背景色',
'section' => 'site_section3',
'priority'   => 30,
)));

$wp_customize->add_setting( 'site_options[color-s-t]', array(
'default' => '#555555','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-s-t]',array(
'settings' => 'site_options[color-s-t]',
'label' => '■バータイトルの文字色',
'section' => 'site_section3',
'priority'   => 40,
)));


$wp_customize->add_setting( 'site_options[color-cat-b-s]', array(
'type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-b-s]',array(
'settings' => 'site_options[color-cat-b-s]',
'label' => '■カテゴリの背景色',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section3',
'priority'   => 50,
)));

$wp_customize->add_setting( 'site_options[color-cat-t-s]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-t-s]',array(
'settings' => 'site_options[color-cat-t-s]',
'label' => '■カテゴリの文字色',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section3',
'priority'   => 60,
)));

$wp_customize->add_setting('site_options[color-cat-radio-s]', array('type'  => 'option',));
$wp_customize->add_control( 'color-cat-radio-s', array(
'settings' => 'site_options[color-cat-radio-s]',
'label' =>'■カテゴリのデザイン',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section3',
'type' => 'radio',
'choices'    => array(
'1' => '単色タイプ',
'2' => '枠タイプ',
'3' => '交互タイプ',
),
'priority'   => 70,
));




//コンテンツ設定----------------------------------------------------------------------------------------------------------------------------

$wp_customize->add_section( 'site_section4', array(
'title'          =>'【コンテンツ】オリジナル設定',
'priority'       => 100,
));

$wp_customize->add_setting( 'site_options[title-ber]', array(
'default' => '#729abf','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[title-ber]',array(
'settings' => 'site_options[title-ber]',
'label' => '■見出しバーの色',
'section' => 'site_section4',
'priority'   => 10,
)));


$wp_customize->add_setting('site_options[content-link]', array('type'  => 'option',));
$wp_customize->add_control( 'content-link', array(
'settings' => 'site_options[content-link]',
'label' =>'■コンテンツリンク太字設定',
'section' => 'site_section4',
'type' => 'radio',
'choices'    => array(
'' => 'ノーマル設定',
'1' => 'タイトルのみ太字',
'2' => 'リンクすべて太字',
),
'priority'   => 20,
));


//投稿テキストサイズ
$wp_customize->add_setting('site_options[select-t-t-h]', array('type'  => 'option',));
$wp_customize->add_control( 'select-t-t-h', array(
'settings' => 'site_options[select-t-t-h]',
'label' =>'■記事タイトルの文字サイズ',
'description' =>'※PC版のみ有効',
'section' => 'site_section4',
'type' => 'select',
'priority'   => 30,
'choices'    => array(
'16px' => '16px',
'17px' => '17px',
'18px' => '18px',
'19px' => '19px',
'20px' => '20px',
'21px' => '21px',
'22px' => '22px',
'23px' => '23px',
'24px' => '24px',
'25px' => '25px',
'26px' => '26px',
'27px' => '27px',
'28px' => '28px',
'29px' => '29px',
'30px' => '30px',
'31px' => '31px',
'32px' => '32px',
'33px' => '33px',
'34px' => '34px',
'35px' => '35px',
'36px' => '36px',
'37px' => '37px',
'38px' => '38px',
'39px' => '39px',
'40px' => '40px',
),
));


$wp_customize->add_setting( 'site_options[comment-color-bg]', array(
'default' => '#f5f5f5','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[comment-color-bg]',array(
'settings' => 'site_options[comment-color-bg]',
'label' => '■コメントの背景色',
'section' => 'site_section4',
'priority'   => 40,
)));


$wp_customize->add_setting( 'site_options[comment-color]', array(
'default' => '#666666','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[comment-color]',array(
'settings' => 'site_options[comment-color]',
'label' => '■コメントのメイン色',
'section' => 'site_section4',
'priority'   => 50,
)));



$wp_customize->add_setting( 'site_options[comment-color-text1]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[comment-color-text1]',array(
'settings' => 'site_options[comment-color-text1]',
'label' => '■コメントの文字色1',
'section' => 'site_section4',
'priority'   => 60,
)));


$wp_customize->add_setting( 'site_options[comment-color-text2]', array(
'default' => '#666666','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[comment-color-text2]',array(
'settings' => 'site_options[comment-color-text2]',
'label' => '■コメントの文字色2',
'section' => 'site_section4',
'priority'   => 70,
)));


$wp_customize->add_setting( 'site_options[color-cat-b]', array(
'default' => '#729ABF','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-b]',array(
'settings' => 'site_options[color-cat-b]',
'label' => '■カテゴリの背景色',
'description' =>'※コンテンツエリアでカテゴリを表示した際に有効',
'section' => 'site_section4',
'priority'   => 80,
)));

$wp_customize->add_setting( 'site_options[color-cat-t]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-t]',array(
'settings' => 'site_options[color-cat-t]',
'label' => '■カテゴリの文字色',
'description' =>'※コンテンツエリアでカテゴリを表示した際に有効',
'section' => 'site_section4',
'priority'   => 90,
)));



$wp_customize->add_setting('site_options[color-cat-radio]', array('type'  => 'option',));
$wp_customize->add_control( 'color-cat-radio', array(
'settings' => 'site_options[color-cat-radio]',
'label' =>'■カテゴリのデザイン',
'description' =>'※コンテンツエリアでカテゴリを表示した際に有効',
'section' => 'site_section4',
'type' => 'radio',
'priority'   => 100,
'choices'    => array(
'1' => '単色タイプ',
'2' => '枠タイプ',
'3' => '交互タイプ',
),
));


//フッター設定----------------------------------------------------------------------------------------------------------------------------

$wp_customize->add_section( 'site_section5', array(
'title'          =>'【フッター】オリジナル設定',
'priority'       => 100,
));



$wp_customize->add_setting('site_options[footer-link]', array('type'  => 'option',));
$wp_customize->add_control( 'footer-link', array(
'settings' => 'site_options[footer-link]',
'label' =>'【サイト全体】フッターリンク太字設定',
'section' => 'site_section5',
'type' => 'radio',
'choices'    => array(
'' => 'ノーマル設定',
'1' => 'タイトルのみ太字',
'2' => 'リンクすべて太字',
),
'priority'   => 10,
));


$wp_customize->add_setting( 'site_options[footer-color-top]', array(
'type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[footer-color-top]',array(
'settings' => 'site_options[footer-color-top]',
'label' => '【サイト全体】フッターの背景色',
'section' => 'site_section5',
'priority'   => 20,
)));


$wp_customize->add_setting( 'site_options[footer-color-title]', array('type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[footer-color-title]',array(
'settings' => 'site_options[footer-color-title]',
'label' => '【サイト全体】フッターのタイトル色',
'section' => 'site_section5',
'priority'   => 30,
)));

$wp_customize->add_setting( 'site_options[footer-color-h]', array(
'default' => '#303030','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[footer-color-h]',array(
'settings' => 'site_options[footer-color-h]',
'label' => '【サイト全体】フッターの見出し色',
'section' => 'site_section5',
'priority'   => 40,
)));


$wp_customize->add_setting( 'site_options[footer-color-text]', array(
'default' => '#729abf','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[footer-color-text]',array(
'settings' => 'site_options[footer-color-text]',
'label' => '【サイト全体】フッターの文字色',
'section' => 'site_section5',
'priority'   => 50,
)));


$wp_customize->add_setting( 'site_options[footer-color-i]', array(
'default' => '#999999','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[footer-color-i]',array(
'settings' => 'site_options[footer-color-i]',
'label' => '【サイト全体】フッターのアイコン色',
'section' => 'site_section5',
'priority'   => 60,
)));



$wp_customize->add_setting( 'site_options[copyright-color-b]', array(
'default' => '#666666','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[copyright-color-b]',array(
'settings' => 'site_options[copyright-color-b]',
'label' => '【サイト全体】フッターのコピーライト背景色',
'section' => 'site_section5',
'priority'   => 70,
)));

$wp_customize->add_setting( 'site_options[copyright-color-t]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[copyright-color-t]',array(
'settings' => 'site_options[copyright-color-t]',
'label' => '【サイト全体】フッターのコピーライト文字色',
'section' => 'site_section5',
'priority'   => 80,
)));

$wp_customize->add_setting( 'site_options[color-cat-b-f]', array(
'default' => '#729ABF','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-b-f]',array(
'settings' => 'site_options[color-cat-b-f]',
'label' => '【サイト全体】フッターカテゴリの背景色',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section5',
'priority'   => 90,
)));

$wp_customize->add_setting( 'site_options[color-cat-t-f]', array(
'default' => '#ffffff','type' => 'option'));
$wp_customize->add_control( new WP_Customize_Color_Control(
$wp_customize, 'site_options[color-cat-t-f]',array(
'settings' => 'site_options[color-cat-t-f]',
'label' => '【サイト全体】フッターカテゴリの文字色',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section5',
'priority'   => 100,
)));



$wp_customize->add_setting('site_options[color-cat-radio-f]', array('type'  => 'option',));
$wp_customize->add_control( 'color-cat-radio-f', array(
'settings' => 'site_options[color-cat-radio-f]',
'label' =>'【サイト全体】フッターカテゴリのデザイン',
'description' =>'※ウィジェットでカテゴリを表示した際に有効',
'section' => 'site_section5',
'type' => 'radio',
'choices'    => array(
'1' => '単色タイプ',
'2' => '枠タイプ',
'3' => '交互タイプ',
),
'priority'   => 110,
));


?>