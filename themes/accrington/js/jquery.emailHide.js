jQuery(document).ready(function()
{
var at = / at /;
var dot = / dot /g;
jQuery('span.mailme').each(function () {
var addr = jQuery(this).text().replace(at,"@").replace(dot,".");
jQuery(this).after('<a href="mailto:'+ addr +'" title="Send an email">'+ addr +'</a>');
jQuery(this).remove();
});
}
);