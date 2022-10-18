<?php

function authorById($id){
    return \Modules\Author\Entities\Author::find($id);
}

function categoryById($id){
    return \Modules\BookCategory\Entities\BookCategory::find($id);
}
function bookById($id){
    return \Modules\BookCategory\Entities\BookCategory::find($id);
}

function orderPdfById($id){
    return \Modules\Orders\Entities\PdfOrder::where('order_id',$id);
}


