function close1() {
    var show = document.getElementById("out").style.display = "none";
}

function open1() {
    var an = document.getElementById("out").style.display = "block";
}

function closeOpen1() {
    var out = document.getElementById('out');
    if(out.style.display == "block") {
        close1()
    }else {
        open1();
    }
}

// hiện danh mục trong trang chủ
function close() {
    var show = document.getElementById("show-danhmuc").style.left = "-100%";
}

function open() {
    var none = document.getElementById("show-danhmuc").style.left = "0";
}

function closeOpen() {
    var hienthi = document.getElementById("show-danhmuc");
    if(hienthi.style.left == "-100%") {
        open();
    }else {
        close();
    }
}

// sk khi click vào danh mục đổi màu
const li_dm = document.querySelectorAll(".sub_menu_listdm ul li");
// duyệt tất cả li bằng vòng lặp forEach
li_dm.forEach(function(li) {
    // tạo sự kiện click cho tất cả thẻ li
    li.addEventListener("click",function(e) {
        // duyệt lại li_dm nếu có cái nào đang thêm class thì xóa nó
        li_dm.forEach(function (deleClass) {
           deleClass.classList.remove("li_sub_menu");
        })
        // tại sk click khi click vào thì thêm class
       e.currentTarget.classList.add("li_sub_menu");
    })
})