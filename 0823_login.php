<?php
require __DIR__. '/__connect_db.php';
$page_name = 'login';
$page_title = '登入';

?>
<?php include __DIR__. '/__head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>

<style>
    small.form-text {
        color: red;
    }
</style>


<div class="container">
<div style="margin-top: 2rem;">

    <div class="alert alert-primary" role="alert" id="info_bar" style="display: none"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">登入</h5>
                    <form name="form1"  onsubmit="return checkForm()">
                    <!-- 這邊不寫post方式 呈現在js中 -->
                        <div class="form-group">
                            <label for="email">帳號(電子信箱)</label>
                            <input type="text" class="form-control" id="email" name="email" >
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" id="password" name="password" >
                            <small id="passwordHelp" class="form-text"></small>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit_btn">登入</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<script>

    let info_bar = document.querySelector('#info_bar');
    const submit_btn = document.querySelector('#submit_btn');
    let i, s, item;
    const required_fields = [
            {
                id: 'email',
                pattern: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
                info: '請填寫正確的 email 格式'
            },
        ];

    /*

    let name = document.querySelector('#name');
    let mobile = document.querySelector('#mobile');
    let mobilePattern = /^09\d{2}\-?\d{3}\-?\d{3}$/;
    // /[A-Z]{2}\d{8}/i  統一發票
    // ?表可有可無

    */
    // 拿到對應的 input element (el), 顯示訊息的 small element (infoEl)
    for(s in required_fields){
        item = required_fields[s];
        item.el = document.querySelector('#' + item.id);
        item.infoEl = document.querySelector('#' + item.id + 'Help');
    }


    function checkForm() {
        
        // 先讓所有欄位外觀回復到原本的狀態
        for(s in required_fields) {
            item = required_fields[s];
            item.el.style.border = '1px solid #CCCCCC';
            item.infoEl.innerHTML = '';
        }
        info_bar.style.display = 'none';
        info_bar.innerHTML = '';

        submit_btn.style.display = 'none';

        //檢查必填欄位, 欄位值的方式
        let isPass = true;


        for(s in required_fields) {
                item = required_fields[s];
            if(! item.pattern.test(item.el.value)){
                item.el.style.border = '1px solid red';
                item.infoEl.innerHTML = item.info;
                isPass = false;
            }
        }



        let formData = new FormData(document.form1);
        if(isPass) {
        fetch('0823_login_api.php', {
            // fetch(發送ajax給誰, {用什麼方式發送, http的body呈現什麼})
            method: 'POST',
            body: formData,
        })
            .then(response=>{
                return response.json();
            })
            .then(json=>{
                console.log(json);
                info_bar.style.display = 'block';
                info_bar.innerHTML = json.info;
                if(json.success){
                    info_bar.className = 'alert alert-success';
                    setTimeout(function(){
                        location.href = '0820_04_page2.php';
                            }, 1000);
                } else {
                    info_bar.className = 'alert alert-danger';
                }
                // 前端處理後端送過來json格式的訊息呈現在頁面上
                  
            });
        } else {
            submit_btn.style.display = 'block';
        }
            return false; // 表單不出用傳統的 post 方式送出
    }

</script>
<?php include __DIR__. '/__footer.php' ?>
