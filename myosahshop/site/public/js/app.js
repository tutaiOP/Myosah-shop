
$(function() {

  $(".buy").click(function(event) {
    var product_id = $(this).attr("product-id");
    $.ajax({
      url: 'index.php?c=cart&a=add',
      type: 'GET',
      data: {product_id: product_id, qty:1}
    })
    .done(function(data) {
      try {
        // Cố gắng parse dữ liệu thành JSON
        var cartData = JSON.parse(data);
        
        // Kiểm tra xem dữ liệu có phải là JSON hợp lệ không
        if (typeof cartData === 'object' && cartData !== null) {
          // Dữ liệu là JSON hợp lệ, gọi hàm displayCart
          displayCart(cartData);
        } else {
          // Dữ liệu không phải là JSON hợp lệ
          console.error('Server returned non-JSON data:', data);
        }
      } catch (e) {
        // Nếu xảy ra lỗi khi parse dữ liệu thành JSON
        console.error('Error parsing JSON data:', e);
        console.error('Server returned data:', data);
      }
    })
    .fail(function(xhr, status, error) {
      console.error('AJAX request failed:', error);
    });
  });

// Register
$("#form-register").validate({
  rules: {
    // simple rule, converted to {required:true}
    name: {
        required: true,
        maxlength: 100,
        regex:/^[a-zA￾ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i
    },
    mobile: {
        required: true,
        regex:/^0([0-9]{9,9})$/,
    },
    email: {
        required: true,
        maxlength: 100,
        email: true,
        // remote: "/index.php?c=register&a=notExistingEmail"
    },
    password: {
        required: true,
        regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
    },
    repassword: {
        required: true,
        equalTo: "[name=password]"
    }
    

  },
  messages: {
      name: {
          required: "Vui lòng nhập họ và tên",
          maxlenth: "Vui lòng không nhập quá 100 ký tự",
          regex: "Vui lòng không nhập số và kí tự đặc biệt",
      },
      mobile: {
        required: "Vui lòng nhập số điện thoại",
        regex: "Vui lòng nhập đúng 10 chữ số",
      },
      email: {
        required: "Vui lòng nhập email",
        maxlenth: "Vui lòng không nhập quá 100 ký tự",
        regex: "Vui lòng nhập đúng định dạng email.Vd: abc@gmail.com",
        // remote: "Email đã tồn tại vui lòng xài email khác"
      },
      password: {
        required: "Vui lòng nhập mật khẩu",
        regex:"Mật khẩu ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt",
      
      },
      repassword: {
        required: "Vui lòng nhập lại mật khẩu",
        equalTo: "Nhập lại mật khẩu phải trùng khớp",
    }
  },
  errorClass: "error-feedback",
  highlight: function (element) {
    $(element).addClass("is-invalid");
  },
  unhighlight: function (element) {
    $(element).removeClass("is-invalid");
  },
});

$.validator.addMethod(
  "regex",
  function (value, element, regexp) {
    if (regexp.constructor != RegExp) regexp = new RegExp(regexp);
    else if (regexp.global) regexp.lastIndex = 0;
    return this.optional(element) || regexp.test(value);
  },
  "Please check your input."
);

$("#form-login").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },

    password: {
        required: true,
    },  
  },

  messages: {
    email: {
      required: "Vui lòng nhập email",
      email: "Vui lòng nhập đúng định dạng email. vd: a@gmail.com",
    },
    password: {
        required: "Vui lòng nhập mật khẩu",
    }
  },
  errorClass: "error-feedback",
  highlight: function (element) {
    $(element).addClass("is-invalid");
  },
  unhighlight: function (element) {
    $(element).removeClass("is-invalid");
  },
});


$(document).ready(function() {
    $('#eye').click(function (e) { 
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else {
            $(this).prev().attr('type', 'password');
        }
        e.preventDefault();   
    });
})

$(document).ready(function() {
  // Hàm để cập nhật class "active"
  function updateActiveClass() {
    // Lấy URL hiện tại
    var currentURL = window.location.href;

    // Lặp qua các thẻ <li> và kiểm tra URL
    $(".header-navbar-list > li.header-navbar-item").each(function() {
      var linkURL = $(this).find("a").attr("href");
      if (currentURL.indexOf(linkURL) !== -1) {
        // Thêm class "active" cho thẻ <li> tương ứng
        $(this).addClass("active");
      } else {
        // Xóa class "active" từ các thẻ <li> khác
        $(this).removeClass("active");
      }
    });
  }

  $(".header-navbar-list > li.header-navbar-item > a").click(function(event) {
    event.preventDefault();

    // Xóa class "active" từ tất cả các thẻ <li>
    $(".header-navbar-list > li.header-navbar-item").removeClass("active");

    // Thêm class "active" cho thẻ <li> chứa thẻ <a> được click
    $(this).parent().addClass("active");

    // Chuyển hướng đến URL được chỉ định trong thuộc tính 'href'
    window.location.href = $(this).attr("href");

    // Cập nhật class "active" sau khi chuyển trang
    updateActiveClass();
  });

  // Cập nhật class "active" khi trang được tải
  updateActiveClass();
});


// Tim kiem theo range
  $('.price-range input').click(function(event) {
      var price_range = $(this).val();
      window.location.href = "index.php?c=product&price-range=" + price_range;
  });

// Tim kiem va sap xep san pham
  $('#sort-select').change(function(event) {
    var str_param = getUpdatedParam("sort", $(this).val());
    window.location.href = "index.php?" + str_param;
  });

// Paging
$(document).ready(function() {
  $(".pagination > li").click(function() {
      $(".pagination > li").removeClass("active");
      $(this).addClass("active");
  })
})

// Tab panel
const tabs = document.querySelectorAll('.tab-item');
const panels = document.querySelectorAll('.tab-panel');


tabs.forEach((tab, index) => {
  tab.addEventListener('click', (event) => {
    event.preventDefault();

    // Xóa class 'active' từ tất cả các tab và panel
    tabs.forEach(t => t.classList.remove('active'));
    panels.forEach(p => p.classList.remove('active'));

    // Thêm class 'active' cho tab và panel đang được click
    tab.classList.add('active');
    panels[index].classList.add('active');
  });
});


// Rating stars
const stars = document.querySelectorAll(".stars span");

stars.forEach((star, index1) => {

 star.addEventListener("click", () => {

   stars.forEach((star, index2) => {

     index1 >= index2 ? star.classList.add("checked") : star.classList.remove("checked");
   });
 });
});

// Modal Cart
var cart = document.querySelectorAll('.header-inner-cart i');
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

cart.forEach(function(item) {
  item.addEventListener('click', function() {
    modal.style.display = "flex";
  });
});

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// Slider product related
$('.filtering').slick({
  slidesToShow: 4,
  slidesToScroll: 4
});

var filtered = false;

$('.js-filter').on('click', function(){
  if (filtered === false) {
    $('.filtering').slick('slickFilter',':even');
    $(this).text('Unfilter Slides');
    filtered = true;
  } else {
    $('.filtering').slick('slickUnfilter');
    $(this).text('Filter Slides');
    filtered = false;
  }
});

window.onload = function() {
  let notifications = document.querySelector('.notifications');


  function createToast(type, icon, title, text) {
    let newToast = document.createElement('div');
    newToast.innerHTML = `
      <div class="toast ${type}">
        <i class="${icon}"></i>
        <div class="content">
          <div class="title">${title}</div>
          <span>${text}</span>
        </div>
        <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>
      </div>`;
      notifications.appendChild(newToast);
      newToast.timeOut = setTimeout(
          ()=>newToast.remove(), 5000
      )
  }

  // Kiểm tra session
  if (sessionStorage.getItem('success')) {
    let type = 'success';
    let icon = 'fa-solid fa-circle-check';
    let title = 'Success';
    let success = sessionStorage.getItem('success');
    createToast(type, icon, title, success);
    sessionStorage.removeItem('success');
  } else if (sessionStorage.getItem('error')) {
    let type = 'error';
    let icon = 'fa-solid fa-circle-exclamation';
    let title = 'Error';
    let success = sessionStorage.getItem('error');
    createToast(type, icon, title, success);
    sessionStorage.removeItem('error');
  }

  if (sessionStorage.getItem('success')) {
    createToast('success', 'fa-solid fa-circle-check', 'Success', sessionStorage.getItem('success'));
    sessionStorage.removeItem('success');
} else if (sessionStorage.getItem('error')) {
    createToast('error', 'fa-solid fa-circle-exclamation', 'Error', sessionStorage.getItem('error'));
    sessionStorage.removeItem('error');
}  
};




    window.onload = function() {
        let list = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let dots = document.querySelectorAll('.slider .dots li');
        let prev = document.getElementById('prev');
        let next = document.getElementById('next');
      
        let active = 0;
        let lengthItems = items.length - 1;
      
        next.onclick = function() {
          if (active + 1 > lengthItems) {
            active = 0;
          } else {
            active = active + 1;
          }
          reloadSlider();
        };
      
        prev.onclick = function() {
          if (active - 1 < 0) {
            active = lengthItems;
          } else {
            active = active - 1;
          }
          reloadSlider();
        };
      
        let refreshSlider = setInterval(() => {
          next.click();
        }, 4000);
      
        function reloadSlider() {
          let checkLeft = items[active].offsetLeft;
          list.style.left = -checkLeft + 'px';
      
          let lastActiveDot = document.querySelector('.slider .dots li.active');
          lastActiveDot.classList.remove('active');
          dots[active].classList.add('active');
          clearInterval(refreshSlider);
          refreshSlider = setInterval(() => {
            next.click();
          }, 4000);
        }
      
        dots.forEach((li, key) => {
          li.addEventListener('click', function() {
            active = key;
            reloadSlider();
          });
        });
      };

 
})

// Cập nhật giá trị của 1 param cụ thể
function getUpdatedParam(k, v) {//sort, price-asc
  var params={};
  //params = {"c":"proudct", "category_id":"5", "sort": "price-desc"}
  // window.location.search = "?c=product&price-range=200000-300000&sort=price-desc"
  window.location.search
    .replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
      params[key] = value;
      // alert(str);
      // alert(key);
      // alert(value);

    }
  );
    
  //{c:"proudct", category_id:"5", sort: "price-desc"}
  params[k] = v;
  if (v == "") {
      delete params[k];
  }

  var x = [];//là array
  for (p in params) {
      //x[0] = 'c=product'
      //x[1] = 'category_id=5'
      //x[2] = 'sort=price-asc'
      x.push(p + "=" + params[p]);
  }
  return str_param = x.join("&");//c=product&category_id=5&sort=price-asc
}

// Paging
function goToPage(page) {
  // var dataUrl = $(self).closest('ul').attr('data-url');
  var str_param = getUpdatedParam("page", page);
  //es6 - template literal
  window.location.href = "index.php?" + str_param;
}


// Hiển thị cart
function displayCart(data) {
  //chuỗi chuỗi dạng object thành object
   var cart = data;
  
  var total_product_number = cart.total_product_number;
  $(".header-inner-cart .number-total-product").html(total_product_number);

  var total_price = cart.total_price;
  $("#modal-cart-detail .price-total").html(total_price+"₫");
  var items = cart.items;
  var rows = "";
  for (let i in items) {
      let item = items[i];
      var grid__row = 
        '<hr>'+
        '<div class="grid__row ">'+
          '<div class="grid__col-2">'+
              '<img src="../upload/'+ item.img +'"class="img-width-50" alt="'+ item.name +'"">'+
          '</div>'+
          '<div class="grid__col-3">'+
              '<a class="product-name" href="">'+ item.name +'</a>'+
          '</div>'+
          '<div class="grid__col-2">'+
              '<span class="product-item-discount">'+Math.round(item.unit_price) +'</span>'+
          '</div>'+
          '<div class="grid__col-2">'+
          '<input type="hidden" value="1">'+
              '<input type="number" min="1" onchange="updateProductInCart(this,'+ item.product_id +')" value="'+ item.qty +'" />'+
          '</div>'+
          '<div class="grid__col-2">'+ Math.round(item.total_price) +'đ</div>'+
          '<div class="grid__col-1">'+
              '<a class="glyphicon-trash remove-product" onclick="deleteProductInCart('+ item.product_id +')">'+
                  '<i class="fa-solid fa-trash-can"></i>'+
              '</a>'+
          '</div>'+
          '</div>';
      rows += grid__row; 
  }
  $("#modal-cart-detail .cart-product").html(rows);
}

// Thay đổi số lượng sản phẩm trong giỏ hàng
function updateProductInCart(self, product_id) {
  var qty = $(self).val();
  $.ajax({
      url: '/index.php?c=cart&a=update',
      type: 'GET',
      data: {product_id: product_id, qty: qty}
  })
  .done(function(data) {
      displayCart(data);
      
  });
}


function deleteProductInCart(product_id) {
  $.ajax({
      url: '/index.php?c=cart&a=delete',
      type: 'GET',
      data: {product_id: product_id}
  })
  .done(function(data) {
      displayCart(data);
      
  });
}