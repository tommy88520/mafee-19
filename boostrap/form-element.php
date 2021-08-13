<?php
include __DIR__. '/partials/init.php';
$title = '表單元素測試';

/*
{
    "combo1": "3",
  "exampleRadios": "option3",
  "cb": [
    "option2",
    "option3"
]
}
*/

$row = [
    "combo1" => "3",
    "exampleRadios" => "option3",
    "cb" => '["option2", "option3"]',
];

$row['cb'] = json_decode($row['cb'], true);

?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/nav-bar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col">

                <form name="form1" action="form-element-api.php" method="post">
                    <!-- combobox -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="combo1">
                            <option value="" disabled selected>-- 請選擇... --</option>
                            <option value="1" <?= $row['combo1']==1 ? 'selected' : '' ?>>甲</option>
                            <option value="2" <?= $row['combo1']==2 ? 'selected' : '' ?>>乙</option>
                            <option value="3" <?= $row['combo1']==3 ? 'selected' : '' ?>>丙</option>
                            <option value="4" <?= $row['combo1']==4 ? 'selected' : '' ?>>丁</option>
                        </select>
                    </div>

                    <!-- radio button -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                    <?= $row['exampleRadios']=='option1' ? 'checked' : '' ?>
                                   name="exampleRadios" id="exampleRadios1" value="option1" >
                            <label class="form-check-label" for="exampleRadios1">
                                跑步
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                <?= $row['exampleRadios']=='option2' ? 'checked' : '' ?>
                                   name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                游泳
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"
                                <?= $row['exampleRadios']=='option3' ? 'checked' : '' ?>
                                   name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                爬山
                            </label>
                        </div>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox1"
                                <?= in_array('option1', $row['cb']) ? 'checked' : '' ?>
                                   value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox2"
                                <?= in_array('option2', $row['cb']) ? 'checked' : '' ?>
                                   value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cb[]" id="inlineCheckbox3"
                                <?= in_array('option3', $row['cb']) ? 'checked' : '' ?>
                                   value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">3</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<?php include __DIR__. '/partials/html-foot.php'; ?>