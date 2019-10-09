$(document).ready(function () {
    /*******************UPDATE Quantity in Cart AJAX **************************/
    $('.quantity-right-plus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the label value
        var quantity = $('#quantity').text();
        // If is not undefined
        $('#quantity').html(parseInt(quantity) + 1);
    });
    $('.quantity-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the label value
        var quantity = $('#quantity').text();
        if (quantity > 1) {
            $('#quantity').html(parseInt(quantity) - 1);
        }
    });
    /*******************ADD To Cart AJAX **************************/
    $('.addToCart').click(function () {
        var productId = this.id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/addProductToCart'
            , data: {
                addProductToCart: productId
            , }
            , type: "POST"
            , success: function (response) {
                if (response == 1) {
                    $('.addToCart').html('Added!');
                }
                else if (response == 0) {
                    $('.addToCart').html('Added Already!');
                }
            }
            , error: function () {}
        });
    });
    /*******************ADD To Wishlist AJAX **************************/
    $('.addToWishlist').click(function () {
        var productId = this.id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/addProductToWishlist'
            , data: {
                addProductToWishlist: productId
            , }
            , type: "POST"
            , success: function (response) {
                if (response == 1) {
                    $('.addToWishlist').html('Added!');
                }
                else if (response == 0) {
                    $('.addToWishlist').html('Added Already!');
                }
            }
            , error: function () {}
        });
    });
    /*******************DELETE Product From Cart Ajax **************************/
    //    $('.deleteProductFromCart').click(function () {
    //        var productId = this.id;
    //        $.ajax({
    //            headers: {
    //                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //            }
    //            , url: '/deleteProductFromCart'
    //            , data: {
    //                deleteProductFromCart: productId
    //            , }
    //            , type: "POST"
    //            , success: function (response) {
    //                $('#' + productId).remove();
    //            }
    //            , error: function () {}
    //        });
    //    });
    $('.deleteProductFromCart').click(function () {
        var productId = this.id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/deleteProductFromCart'
            , data: {
                deleteProductFromCart: productId
            , }
            , type: "POST"
            , success: function (response) {
                $('#' + productId).remove();
            }
            , error: function () {}
        });
    });
    $('.deleteProductFromWishlist').click(function () {
        var productId = this.id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/deleteProductFromWishlist'
            , data: {
                deleteProductFromWishlist: productId
            , }
            , type: "POST"
            , success: function (response) {
                $('#' + productId).remove();
            }
            , error: function () {}
        });
    });
    /***************ADD Product to Wishlist from Shop***********/
    $('.addProductToWishlist').click(function () {
        var productWishlistId = String(this.id);
        var productId = productWishlistId.replace("wishlist-", "");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/addProdToWishlist'
            , data: {
                addProductToWishlist: productId
            , }
            , type: "POST"
            , success: function (response) {
                if (response == 1) {
                    $('#' + productWishlistId).html('Added!');
                }
                else if (response == 0) {
                    $('#' + productWishlistId).html('Added Already!');
                }
            }
            , error: function () {}
        });
    });
    $('.addProductToCart').click(function () {
        var productCartId = String(this.id);
        var productId = productCartId.replace("cart-", "");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/addProdToCart'
            , data: {
                addProductToCart: productId
            , }
            , type: "POST"
            , success: function (response) {
                if (response == 1) {
                    $('#' + productCartId).html('Added!');
                }
                else if (response == 0) {
                    $('#' + productCartId).html('Added Already!');
                }
            }
            , error: function (response) {}
        });
    });
    $('.postReview').click(function () {
        var productId = this.id;
        var comment_content = $("#comment-box").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: '/postReview'
            , data: {
                postReviewId: productId
                , postComment: comment_content
            , }
            , type: "POST"
            , success: function (response) {
                $('.postReview').html('Posted');
                //                getAllComments(productId);
            }
            , error: function (response) {
                window.alert("failed");
            }
        });
    });
});