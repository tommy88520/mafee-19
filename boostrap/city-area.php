<?php
    include __DIR__. '/partials/init.php';
    $title = '選擇地區測試';
?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/nav-bar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="">
                <div class="form-group">
                    <label for="city_sel">選擇縣市</label>
                    <select class="form-control" id="city_sel" name="city_sel">
                    </select>
                </div>

                <div class="form-group">
                    <label for="area_sel">選擇地區</label>
                    <select class="form-control" id="area_sel" name="area_sel">

                    </select>
                </div>

            </form>

        </div>
    </div>

</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    let data;
    const city_sel = document.querySelector('#city_sel');
    const area_sel = document.querySelector('#area_sel');

    const optionTpl = o =>{
        return `<option value="${o.value}">${o.name}</option>`;
    };

    const genCitySel = ()=>{
        let str = '';

        data.forEach(el=>{
            str += optionTpl({
                value: el.name,
                name: el.name,
            });
        });
        city_sel.innerHTML = str;
    };

    fetch('taiwan_districts.json').then(r=>r.json()).then(obj=>{
        data = obj;
        genCitySel();
    });



</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>