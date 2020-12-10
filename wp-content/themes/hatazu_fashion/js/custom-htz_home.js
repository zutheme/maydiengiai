var e_departments = document.getElementsByClassName('departments')[0];
//fn_removeclass(e_departments__links, 'hide');
fn_addclass(e_departments, 'departments--open departments--fixed');
var e_top_related = document.getElementsByClassName('top-related')[0];
var e_card = e_top_related.getElementsByClassName('product-card');
for (var i = 0; i < e_card.length; i++) {
	fn_addclass(e_card[i], 'product-card--layout--horizontal');
}
