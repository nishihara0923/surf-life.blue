/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-return1': '&#xe917;',
		'icon-return2': '&#xe918;',
		'icon-loupe': '&#xe925;',
		'icon-lock': '&#xe924;',
		'icon-bottom': '&#xe921;',
		'icon-left': '&#xe922;',
		'icon-right': '&#xe923;',
		'icon-top': '&#xe926;',
		'icon-next': '&#xe91b;',
		'icon-next_b': '&#xe91c;',
		'icon-previous': '&#xe91d;',
		'icon-previous_b': '&#xe91e;',
		'icon-hatebu': '&#xe903;',
		'icon-home': '&#xe904;',
		'icon-folder-open': '&#xe905;',
		'icon-price-tag': '&#xe906;',
		'icon-clock': '&#xe90b;',
		'icon-bubble2': '&#xe907;',
		'icon-bubbles3': '&#xe908;',
		'icon-bubbles4': '&#xe909;',
		'icon-quotes-left': '&#xe913;',
		'icon-quotes-right': '&#xe914;',
		'icon-spinner11': '&#xe90c;',
		'icon-search': '&#xe910;',
		'icon-menu': '&#xe90a;',
		'icon-eye': '&#xe911;',
		'icon-happy': '&#xe912;',
		'icon-plus': '&#xe90d;',
		'icon-minus': '&#xe90e;',
		'icon-cross': '&#xe90f;',
		'icon-play2': '&#xe915;',
		'icon-play3': '&#xe916;',
		'icon-circle-up': '&#xe91f;',
		'icon-circle-right': '&#xe919;',
		'icon-circle-down': '&#xe920;',
		'icon-circle-left': '&#xe91a;',
		'icon-google-plus': '&#xe900;',
		'icon-facebook': '&#xe901;',
		'icon-twitter': '&#xe902;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
