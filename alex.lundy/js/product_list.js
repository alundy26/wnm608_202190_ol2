function showResults(d) {
    $(".productlist").html(
        d.error ? d.error :
        d.result && d.result.length ? listItemTemplate(d.result) :
        'No Results'
    );
}

query({ type: 'products_all' }).then(showResults);

$(() => {

    $("#product-search").on("submit", function(e) {
        e.preventDefault();
        let search = $(this).find("input").val();
        query({type:'product_search',search:search }).then(showResults);
    })


    $("[data-filter]").on("click",function(e){
        let column = $(this).data("filter");
        let value = $(this).data("value");
        query(
        value=="" ? {type:'products_all'}:
        {type:'product_filter', column:column, value:value}
        ).then(showResults);
    })

	$(".js-sort").on("change", function(e){
		let queryObj = { type: 'products_all' };
		switch (parseInt(this.value)) {
			case 1:
				queryObj = { type: 'product_sort', column: 'date_create', dir: 'DESC' };
				break;
			case 2:
				queryObj = { type: 'product_sort', column: 'date_create', dir: 'ASC' };
				break;
			case 3:
				queryObj = { type: 'product_sorts', column: 'price_int', dir: 'ASC' };
				break;
			case 4:
				queryObj = { type: 'product_sorts', column: 'price_int', dir: 'DESC' };
				break;
		}
	});
	
});
