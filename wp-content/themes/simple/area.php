<?php
/*
Template Name: type-area
*/
?>
<?php get_header();global $original_site;?>
<div id="main-content">
<div id="main-content<?php echo esc_html($original_site['column_p']);?>-area">
<div id="main-content<?php echo esc_html($original_site['column_p']);?>">
<div id="content-single">


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- 表示内容を記述 -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<h1><?php the_title(); ?></h1>

<div class="post_title">
<style>
</style>

<div class="tide_aria">北海道</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%9c%a7%e5%a4%9a%e5%b8%83">霧多布</a></li><li><a href="/tide_level/%e9%87%a7%e8%b7%af">釧路</a></li><li><a href="/tide_level/%e8%8b%ab%e5%b0%8f%e7%89%a7%e8%a5%bf">苫小牧西</a></li><li><a href="/tide_level/%e8%8b%ab%e5%b0%8f%e7%89%a7%e6%9d%b1">苫小牧東</a></li><li><a href="/tide_level/%e8%8a%b1%e5%92%b2">花咲</a></li><li><a href="/tide_level/%e7%be%85%e8%87%bc">羅臼</a></li><li><a href="/tide_level/%e7%b6%b2%e8%b5%b0">網走</a></li><li><a href="/tide_level/%e7%b4%8b%e5%88%a5">紋別</a></li><li><a href="/tide_level/%e7%a8%9a%e5%86%85">稚内</a></li><li><a href="/tide_level/%e7%9f%b3%e7%8b%a9%e6%96%b0%e6%b8%af">石狩新港</a></li><li><a href="/tide_level/%e7%99%bd%e8%80%81">白老</a></li><li><a href="/tide_level/%e7%95%99%e8%90%8c">留萌</a></li><li><a href="/tide_level/%e7%80%ac%e6%a3%9a">瀬棚</a></li><li><a href="/tide_level/%e6%b5%a6%e6%b2%b3">浦河</a></li><li><a href="/tide_level/%e6%b2%93%e5%bd%a2">沓形</a></li><li><a href="/tide_level/%e6%b1%9f%e5%b7%ae">江差</a></li><li><a href="/tide_level/%e6%a3%ae">森</a></li><li><a href="/tide_level/%e6%a0%b9%e5%ae%a4">根室</a></li><li><a href="/tide_level/%e6%9e%9d%e5%b9%b8">枝幸</a></li><li><a href="/tide_level/%e6%9d%be%e5%89%8d">松前</a></li><li><a href="/tide_level/%e5%bf%8d%e8%b7%af">忍路</a></li><li><a href="/tide_level/%e5%b2%a9%e5%86%85">岩内</a></li><li><a href="/tide_level/%e5%b0%8f%e6%a8%bd">小樽</a></li><li><a href="/tide_level/%e5%af%bf%e9%83%bd">寿都</a></li><li><a href="/tide_level/%e5%ae%a4%e8%98%ad">室蘭</a></li><li><a href="/tide_level/%e5%a5%a5%e5%b0%bb%e6%b8%af">奥尻港</a></li><li><a href="/tide_level/%e5%a5%a5%e5%b0%bb">奥尻</a></li><li><a href="/tide_level/%e5%90%89%e5%b2%a1">吉岡</a></li><li><a href="/tide_level/%e5%8d%81%e5%8b%9d">十勝</a></li><li><a href="/tide_level/%e5%87%bd%e9%a4%a8">函館</a></li></ul>

<div class="tide_aria">青森県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%9d%92%e6%a3%ae">青森</a></li><li><a href="/tide_level/%e7%ab%9c%e9%a3%9b">竜飛</a></li><li><a href="/tide_level/%e6%b7%b1%e6%b5%a6">深浦</a></li><li><a href="/tide_level/%e6%b5%85%e8%99%ab">浅虫</a></li><li><a href="/tide_level/%e5%a4%a7%e9%96%93">大間</a></li><li><a href="/tide_level/%e5%a4%a7%e6%b9%8a">大湊</a></li><li><a href="/tide_level/%e5%85%ab%e6%88%b8%e6%b8%af">八戸港</a></li><li><a href="/tide_level/%e5%85%ab%e6%88%b8">八戸</a></li><li><a href="/tide_level/%e4%b8%8b%e5%8c%97">下北</a></li><li><a href="/tide_level/%e3%82%80%e3%81%a4%e5%b0%8f%e5%b7%9d%e5%8e%9f">むつ小川原</a></li></ul>

<div class="tide_aria">秋田県</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%88%b9%e5%b7%9d%e6%b8%af">船川港</a></li><li><a href="/tide_level/%e7%a7%8b%e7%94%b0">秋田</a></li><li><a href="/tide_level/%e7%94%b7%e9%b9%bf">男鹿</a></li></ul>

<div class="tide_aria">岩手県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%87%9c%e7%9f%b3">釜石</a></li><li><a href="/tide_level/%e5%ae%ae%e5%8f%a4">宮古</a></li><li><a href="/tide_level/%e5%a4%a7%e8%88%b9%e6%b8%a1">大船渡</a></li><li><a href="/tide_level/%e4%b9%85%e6%85%88">久慈</a></li></ul>

<div class="tide_aria">宮城県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%ae%8e%e5%b7%9d">鮎川</a></li><li><a href="/tide_level/%e7%9f%b3%e5%b7%bb">石巻</a></li><li><a href="/tide_level/%e5%a1%a9%e9%87%9c">塩釜</a></li><li><a href="/tide_level/%e4%bb%99%e5%8f%b0%e6%96%b0%e6%b8%af">仙台新港</a></li></ul>

<div class="tide_aria">山形県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%bc%a0%e3%83%b6%e9%96%a2">鼠ヶ関</a></li><li><a href="/tide_level/%e9%a3%9b%e5%b3%b6">飛島</a></li><li><a href="/tide_level/%e9%85%92%e7%94%b0">酒田</a></li></ul>

<div class="tide_aria">福島県</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%9b%b8%e9%a6%ac">相馬</a></li><li><a href="/tide_level/%e5%b0%8f%e5%90%8d%e6%b5%9c">小名浜</a></li></ul>

<div class="tide_aria">茨城県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%b9%bf%e5%b3%b6">鹿島</a></li><li><a href="/tide_level/%e6%97%a5%e7%ab%8b">日立</a></li><li><a href="/tide_level/%e5%a4%a7%e6%b4%97">大洗</a></li></ul>

<div class="tide_aria">千葉県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%a4%a8%e5%b1%b1">館山</a></li><li><a href="/tide_level/%e9%8a%9a%e5%ad%90%e6%bc%81%e6%b8%af">銚子漁港</a></li><li><a href="/tide_level/%e6%9c%a8%e6%9b%b4%e6%b4%a5">木更津</a></li><li><a href="/tide_level/%e5%b8%83%e8%89%af">布良</a></li><li><a href="/tide_level/%e5%8d%83%e8%91%89%e6%b8%af">千葉港</a></li><li><a href="/tide_level/%e5%8d%83%e8%91%89">千葉</a></li><li><a href="/tide_level/%e5%8b%9d%e6%b5%a6">勝浦</a></li></ul>

<div class="tide_aria">東京都</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%a5%9e%e6%b4%a5%e5%b3%b6">神津島</a></li><li><a href="/tide_level/%e7%88%b6%e5%b3%b6">父島</a></li><li><a href="/tide_level/%e6%9d%b1%e4%ba%ac">東京</a></li><li><a href="/tide_level/%e5%b2%a1%e7%94%b0">岡田</a></li><li><a href="/tide_level/%e5%8d%97%e9%b3%a5%e5%b3%b6">南鳥島</a></li><li><a href="/tide_level/%e5%85%ab%e4%b8%88%e5%b3%b6%ef%bc%88%e7%a5%9e%e6%b9%8a%ef%bc%89">八丈島（神湊）</a></li><li><a href="/tide_level/%e5%85%ab%e4%b8%88%e5%b3%b6%ef%bc%88%e5%85%ab%e9%87%8d%e6%a0%b9%ef%bc%89">八丈島（八重根）</a></li><li><a href="/tide_level/%e4%b8%89%e5%ae%85%e5%b3%b6%ef%bc%88%e9%98%bf%e5%8f%a4%ef%bc%89">三宅島（阿古）</a></li><li><a href="/tide_level/%e4%b8%89%e5%ae%85%e5%b3%b6%ef%bc%88%e5%9d%aa%e7%94%b0%ef%bc%89">三宅島（坪田）</a></li></ul>

<div class="tide_aria">神奈川県</div>
<ul class="tide_list"><li><a href="/tide_level/%e6%b9%98%e5%8d%97%e6%b8%af">湘南港</a></li><li><a href="/tide_level/%e6%b2%b9%e5%a3%ba">油壺</a></li><li><a href="/tide_level/%e6%a8%aa%e9%a0%88%e8%b3%80">横須賀</a></li><li><a href="/tide_level/%e6%a8%aa%e6%b5%9c">横浜</a></li><li><a href="/tide_level/%e6%9c%ac%e7%89%a7">本牧</a></li><li><a href="/tide_level/%e5%b7%9d%e5%b4%8e">川崎</a></li><li><a href="/tide_level/%e5%b0%8f%e7%94%b0%e5%8e%9f">小田原</a></li><li><a href="/tide_level/%e4%ba%ac%e6%b5%9c%e6%b8%af">京浜港</a></li></ul>

<div class="tide_aria">静岡県</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%88%9e%e9%98%aa">舞阪</a></li><li><a href="/tide_level/%e7%9f%b3%e5%bb%8a%e5%b4%8e">石廊崎</a></li><li><a href="/tide_level/%e7%94%b0%e5%ad%90">田子</a></li><li><a href="/tide_level/%e7%84%bc%e6%b4%a5">焼津</a></li><li><a href="/tide_level/%e6%b8%85%e6%b0%b4%e6%b8%af">清水港</a></li><li><a href="/tide_level/%e5%be%a1%e5%89%8d%e5%b4%8e">御前崎</a></li><li><a href="/tide_level/%e5%8d%97%e4%bc%8a%e8%b1%86">南伊豆</a></li><li><a href="/tide_level/%e5%86%85%e6%b5%a6">内浦</a></li><li><a href="/tide_level/%e4%bc%8a%e6%9d%b1">伊東</a></li><li><a href="/tide_level/%e4%b8%8b%e7%94%b0">下田</a></li></ul>

<div class="tide_aria">石川県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%87%91%e6%b2%a2">金沢</a></li><li><a href="/tide_level/%e8%bc%aa%e5%b3%b6">輪島</a></li><li><a href="/tide_level/%e8%83%bd%e7%99%bb">能登</a></li><li><a href="/tide_level/%e4%b8%83%e5%b0%be">七尾</a></li></ul>

<div class="tide_aria">富山県</div>
<ul class="tide_list"><li><a href="/tide_level/%e6%96%b0%e6%b9%8a">新湊</a></li><li><a href="/tide_level/%e5%af%8c%e5%b1%b1">富山</a></li><li><a href="/tide_level/%e4%bc%8f%e6%9c%a8%e5%af%8c%e5%b1%b1">伏木富山</a></li></ul>

<div class="tide_aria">新潟県</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%b2%9f%e5%b3%b6">粟島</a></li><li><a href="/tide_level/%e7%9b%b4%e6%b1%9f%e6%b4%a5">直江津</a></li><li><a href="/tide_level/%e6%9f%8f%e5%b4%8e">柏崎</a></li><li><a href="/tide_level/%e6%96%b0%e6%bd%9f%e8%a5%bf%e6%b8%af">新潟西港</a></li><li><a href="/tide_level/%e6%96%b0%e6%bd%9f%e6%9d%b1%e6%b8%af">新潟東港</a></li><li><a href="/tide_level/%e5%b0%8f%e6%9c%a8">小木</a></li><li><a href="/tide_level/%e4%bd%90%e6%b8%a1">佐渡</a></li><li><a href="/tide_level/%e4%b8%a1%e6%b4%a5">両津</a></li></ul>

<div class="tide_aria">福井県</div>
<ul class="tide_list"><li><a href="/tide_level/%e6%95%a6%e8%b3%80">敦賀</a></li><li><a href="/tide_level/%e4%b8%89%e5%9b%bd">三国</a></li></ul>

<div class="tide_aria">愛知県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%ac%bc%e5%b4%8e">鬼崎</a></li><li><a href="/tide_level/%e8%b5%a4%e7%be%bd%e6%a0%b9">赤羽根</a></li><li><a href="/tide_level/%e8%a1%a3%e6%b5%a6">衣浦</a></li><li><a href="/tide_level/%e5%bd%a2%e5%8e%9f">形原</a></li><li><a href="/tide_level/%e5%90%8d%e5%8f%a4%e5%b1%8b">名古屋</a></li><li><a href="/tide_level/%e4%b8%89%e6%b2%b3">三河</a></li></ul>

<div class="tide_aria">三重県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%b3%a5%e7%be%bd">鳥羽</a></li><li><a href="/tide_level/%e7%86%8a%e9%87%8e">熊野</a></li><li><a href="/tide_level/%e5%b0%be%e9%b7%b2">尾鷲</a></li><li><a href="/tide_level/%e5%9b%9b%e6%97%a5%e5%b8%82%e6%b8%af">四日市港</a></li></ul>

<div class="tide_aria">京都府</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%88%9e%e9%b6%b4">舞鶴</a></li><li><a href="/tide_level/%e5%ae%ae%e6%b4%a5">宮津</a></li></ul>

<div class="tide_aria">大阪府</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%96%a2%e7%a9%ba%e5%b3%b6">関空島</a></li><li><a href="/tide_level/%e6%b7%a1%e8%bc%aa">淡輪</a></li><li><a href="/tide_level/%e6%b3%89%e5%a4%a7%e6%b4%a5">泉大津</a></li><li><a href="/tide_level/%e5%b2%b8%e5%92%8c%e7%94%b0">岸和田</a></li><li><a href="/tide_level/%e5%a4%a7%e9%98%aa">大阪</a></li><li><a href="/tide_level/%e5%a0%ba">堺</a></li></ul>

<div class="tide_aria">兵庫県</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%a5%bf%e5%ae%ae">西宮</a></li><li><a href="/tide_level/%e7%a5%9e%e6%88%b8">神戸</a></li><li><a href="/tide_level/%e6%b4%b2%e6%9c%ac">洲本</a></li><li><a href="/tide_level/%e6%b4%a5%e5%b1%85%e5%b1%b1">津居山</a></li><li><a href="/tide_level/%e6%b1%9f%e4%ba%95">江井</a></li><li><a href="/tide_level/%e6%98%8e%e7%9f%b3">明石</a></li><li><a href="/tide_level/%e5%b0%bc%e5%b4%8e">尼崎</a></li><li><a href="/tide_level/%e5%a7%ab%e8%b7%af%ef%bc%88%e9%a3%be%e7%a3%a8%ef%bc%89">姫路（飾磨）</a></li></ul>

<div class="tide_aria">和歌山県</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%99%bd%e6%b5%9c">白浜</a></li><li><a href="/tide_level/%e6%b5%b7%e5%8d%97">海南</a></li><li><a href="/tide_level/%e6%b5%a6%e7%a5%9e">浦神</a></li><li><a href="/tide_level/%e5%be%a1%e5%9d%8a">御坊</a></li><li><a href="/tide_level/%e5%92%8c%e6%ad%8c%e5%b1%b1">和歌山</a></li><li><a href="/tide_level/%e4%b8%b2%e6%9c%ac">串本</a></li><li><a href="/tide_level/%e4%b8%8b%e6%b4%a5">下津</a></li></ul>

<div class="tide_aria">島根県</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%a5%bf%e9%83%b7">西郷</a></li><li><a href="/tide_level/%e6%b5%9c%e7%94%b0">浜田</a></li></ul>

<div class="tide_aria">岡山県</div>
<ul class="tide_list"><li><a href="/tide_level/%e6%b0%b4%e5%b3%b6">水島</a></li><li><a href="/tide_level/%e5%ae%87%e9%87%8e">宇野</a></li></ul>

<div class="tide_aria">広島県</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%b3%b8%e5%b4%8e">糸崎</a></li><li><a href="/tide_level/%e7%ab%b9%e5%8e%9f">竹原</a></li><li><a href="/tide_level/%e5%ba%83%e5%b3%b6">広島</a></li><li><a href="/tide_level/%e5%91%89">呉</a></li></ul>

<div class="tide_aria">山口県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%a0%88%e4%bd%90">須佐</a></li><li><a href="/tide_level/%e9%95%b7%e5%ba%9c">長府</a></li><li><a href="/tide_level/%e8%90%a9">萩</a></li><li><a href="/tide_level/%e7%94%b0%e3%83%8e%e9%a6%96">田ノ首</a></li><li><a href="/tide_level/%e5%be%b3%e5%b1%b1">徳山</a></li><li><a href="/tide_level/%e5%bc%9f%e5%ad%90%e5%be%85">弟子待</a></li><li><a href="/tide_level/%e5%ae%87%e9%83%a8">宇部</a></li><li><a href="/tide_level/%e5%a4%a7%e5%b1%b1%e3%81%ae%e9%bc%bb">大山の鼻</a></li><li><a href="/tide_level/%e5%8d%97%e9%a2%a8%e6%b3%8a">南風泊</a></li><li><a href="/tide_level/%e4%b8%89%e7%94%b0%e5%b0%bb">三田尻</a></li></ul>

<div class="tide_aria">徳島県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%98%bf%e6%b3%a2%e7%94%b1%e5%b2%90">阿波由岐</a></li><li><a href="/tide_level/%e6%a9%98">橘</a></li><li><a href="/tide_level/%e6%97%a5%e5%92%8c%e4%bd%90">日和佐</a></li><li><a href="/tide_level/%e5%b0%8f%e6%9d%be%e5%b3%b6">小松島</a></li></ul>

<div class="tide_aria">香川県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%ab%98%e6%9d%be">高松</a></li><li><a href="/tide_level/%e9%9d%92%e6%9c%a8">青木</a></li><li><a href="/tide_level/%e5%a4%9a%e5%ba%a6%e6%b4%a5">多度津</a></li><li><a href="/tide_level/%e4%b8%8e%e5%b3%b6">与島</a></li></ul>

<div class="tide_aria">愛媛県</div>
<ul class="tide_list"><li><a href="/tide_level/%e6%b3%a2%e6%ad%a2%e6%b5%9c">波止浜</a></li><li><a href="/tide_level/%e6%9d%be%e5%b1%b1">松山</a></li><li><a href="/tide_level/%e6%9d%a5%e5%b3%b6%e8%88%aa%e8%b7%af">来島航路</a></li><li><a href="/tide_level/%e6%96%b0%e5%b1%85%e6%b5%9c">新居浜</a></li><li><a href="/tide_level/%e5%ae%87%e5%92%8c%e5%b3%b6">宇和島</a></li><li><a href="/tide_level/%e4%bc%8a%e4%ba%88%e4%b8%89%e5%b3%b6">伊予三島</a></li><li><a href="/tide_level/%e4%bb%8a%e6%b2%bb%e5%b8%82%e5%b0%8f%e5%b3%b6">今治市小島</a></li><li><a href="/tide_level/%e4%bb%8a%e6%b2%bb">今治</a></li></ul>

<div class="tide_aria">高知県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%ab%98%e7%9f%a5%e4%b8%8b%e7%94%b0">高知下田</a></li><li><a href="/tide_level/%e9%ab%98%e7%9f%a5">高知</a></li><li><a href="/tide_level/%e9%a0%88%e5%b4%8e">須崎</a></li><li><a href="/tide_level/%e7%94%b2%e6%b5%a6">甲浦</a></li><li><a href="/tide_level/%e7%89%87%e5%b3%b6">片島</a></li><li><a href="/tide_level/%e5%ae%a4%e6%88%b8%e5%b2%ac">室戸岬</a></li><li><a href="/tide_level/%e5%9c%9f%e4%bd%90%e6%b8%85%e6%b0%b4">土佐清水</a></li><li><a href="/tide_level/%e4%b9%85%e7%a4%bc">久礼</a></li></ul>

<div class="tide_aria">福岡県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%9d%92%e6%b5%9c">青浜</a></li><li><a href="/tide_level/%e9%96%80%e5%8f%b8">門司</a></li><li><a href="/tide_level/%e8%8b%85%e7%94%b0">苅田</a></li><li><a href="/tide_level/%e7%a0%82%e6%b4%a5">砂津</a></li><li><a href="/tide_level/%e6%97%a5%e6%98%8e">日明</a></li><li><a href="/tide_level/%e5%a4%a7%e7%89%9f%e7%94%b0">大牟田</a></li><li><a href="/tide_level/%e5%8d%9a%e5%a4%9a">博多</a></li></ul>

<div class="tide_aria">佐賀県</div>
<ul class="tide_list"><li><a href="/tide_level/%e5%a4%a7%e6%b5%a6">大浦</a></li><li><a href="/tide_level/%e5%94%90%e6%b4%a5">唐津</a></li><li><a href="/tide_level/%e4%bb%ae%e5%b1%8b">仮屋</a></li></ul>

<div class="tide_aria">長崎県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%95%b7%e5%b4%8e">長崎</a></li><li><a href="/tide_level/%e9%83%b7%e3%83%8e%e6%b5%a6">郷ノ浦</a></li><li><a href="/tide_level/%e7%a6%8f%e6%b1%9f">福江</a></li><li><a href="/tide_level/%e7%9a%87%e5%90%8e">皇后</a></li><li><a href="/tide_level/%e5%b9%b3%e6%88%b8%e7%80%ac%e6%88%b8">平戸瀬戸</a></li><li><a href="/tide_level/%e5%af%be%e9%a6%ac%e6%af%94%e7%94%b0%e5%8b%9d">対馬比田勝</a></li><li><a href="/tide_level/%e5%af%be%e9%a6%ac">対馬</a></li><li><a href="/tide_level/%e5%8f%a3%e4%b9%8b%e6%b4%a5">口之津</a></li><li><a href="/tide_level/%e5%8e%b3%e5%8e%9f">厳原</a></li><li><a href="/tide_level/%e4%bd%90%e4%b8%96%e4%bf%9d">佐世保</a></li></ul>

<div class="tide_aria">熊本県</div>
<ul class="tide_list"><li><a href="/tide_level/%e8%8b%93%e5%8c%97">苓北</a></li><li><a href="/tide_level/%e7%86%8a%e6%9c%ac">熊本</a></li><li><a href="/tide_level/%e6%b0%b4%e4%bf%a3">水俣</a></li><li><a href="/tide_level/%e6%9c%ac%e6%b8%a1%e7%80%ac%e6%88%b8">本渡瀬戸</a></li><li><a href="/tide_level/%e5%85%ab%e4%bb%a3">八代</a></li><li><a href="/tide_level/%e4%b8%89%e8%a7%92">三角</a></li></ul>

<div class="tide_aria">大分県</div>
<ul class="tide_list"><li><a href="/tide_level/%e5%a4%a7%e5%88%86">大分</a></li><li><a href="/tide_level/%e5%88%a5%e5%ba%9c">別府</a></li><li><a href="/tide_level/%e4%bd%90%e4%bc%af">佐伯</a></li></ul>

<div class="tide_aria">宮崎県</div>
<ul class="tide_list"><li><a href="/tide_level/%e7%b4%b0%e5%b3%b6">細島</a></li><li><a href="/tide_level/%e6%b2%b9%e6%b4%a5">油津</a></li><li><a href="/tide_level/%e5%ae%ae%e5%b4%8e">宮崎</a></li></ul>

<div class="tide_aria">鹿児島県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%b9%bf%e5%85%90%e5%b3%b6">鹿児島</a></li><li><a href="/tide_level/%e9%98%bf%e4%b9%85%e6%a0%b9">阿久根</a></li><li><a href="/tide_level/%e8%a5%bf%e4%b9%8b%e8%a1%a8">西之表</a></li><li><a href="/tide_level/%e7%a8%ae%e5%ad%90%e5%b3%b6">種子島</a></li><li><a href="/tide_level/%e6%9e%95%e5%b4%8e">枕崎</a></li><li><a href="/tide_level/%e5%bf%97%e5%b8%83%e5%bf%97">志布志</a></li><li><a href="/tide_level/%e5%a5%84%e7%be%8e">奄美</a></li><li><a href="/tide_level/%e5%a4%a7%e6%b3%8a">大泊</a></li><li><a href="/tide_level/%e5%90%8d%e7%80%ac">名瀬</a></li><li><a href="/tide_level/%e4%b8%ad%e4%b9%8b%e5%b3%b6">中之島</a></li></ul>

<div class="tide_aria">沖縄県</div>
<ul class="tide_list"><li><a href="/tide_level/%e9%82%a3%e8%a6%87">那覇</a></li><li><a href="/tide_level/%e8%a5%bf%e8%a1%a8">西表島</a></li><li><a href="/tide_level/%e7%9f%b3%e5%9e%a3">石垣島</a></li><li><a href="/tide_level/%e5%8d%97%e5%9f%8e">南城</a></li><li><a href="/tide_level/%e5%ae%ae%e5%8f%a4%e5%b3%b6">宮古島</a></li><li><a href="/tide_level/%e5%8d%97%e5%a4%a7%e6%9d%b1">南大東島</a></li><li><a href="/tide_level/%e4%b8%ad%e5%9f%8e%e6%b9%be%e6%b8%af">中城湾港</a></li><li><a href="/tide_level/%e4%b8%8e%e9%82%a3%e5%9b%bd">与那国島</a></li></ul>

<?php wp_link_pages( array(
'before'      => '<div class="single-link-navi">',
'after'       => '</div>',
'link_before' => '<span class="single-links">',
'link_after'  => '</span>',
'next_or_number'   => 'number' ,
));
?>
</div>

</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
</div>

</div><!-- #content-single -->

<?php if ( esc_html($original_site['column_p']) <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo esc_html($original_site['column_p']);?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>

</div><!-- #main-content -->
<?php get_footer();?>