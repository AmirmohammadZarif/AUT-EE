<?php
include "./database/connection.php";
include "./core/functions.php";
include "./api/config.php";

$sections_api_result = request("POST", $api_url . "search.php", array("action" => "readAll", "slug" => "dean"));
$sections_array = json_decode($sections_api_result, true);

foreach ($sections_array as $section) :
?>
    <div id="<? echo $section["slug"]; ?>" class="row g-0 mb-2 mt-5">
        <div class="col p-4 shadow-sm rounded bg-light">
            <div class="row g-0 overflow-hidden mb-4 h-md-250 position-relative" style="overflow: visible!important;">
                <div class="d-flex mb-4 align-middle">
                    <i class="fa-duotone fa-circle-info d-inline float-right fa-2x text-primary me-2"></i>
                    <h3 class="title-text d-inline-block mb-2 d-inline text-dark"><? echo $section["title"]; ?></h3>
                </div>

                <div class="row">
                    <? if (isset($section["availability"])) : ?>
                        <div class="d-flex align-middle mb-4">
                            <i class="fa-duotone fa-calendar-clock d-inline float-right fa text-dark me-2"></i>
                            <p class="title-text d-inline-block mb-2 d-inline text-dark fw-bold me-1">روز های حضور در دفتر:</p>
                            <p class="title-text d-inline-block mb-2 d-inline text-dark fw-normal"><? echo $section["availability"]; ?></p>
                        </div>
                    <? endif; ?>

                    <?
                    $child_array = $section["child"];
                    foreach ($child_array as $data_array) :

                    ?>
                        <h5 class="mb-3">کارشناسان دفتر ریاست در طبقه هشتم ابوریحان</h5>
                        <div class="card p-0">
                            <div class="card-bodys g-0 p-0">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <? if ($data_array["type"] == "office") : ?>
                                                <th scope="col">نام و نام خانوادگی</th>
                                                <th scope="col">شماره تماس</th>
                                            <? elseif ($data_array["type"] == "lab") : ?>
                                                <th scope="col">آزمایشگاه</th>
                                                <th scope="col">شماره اتاق</th>
                                            <? elseif ($data_array["type"] == "center") : ?>
                                                <th scope="col">نام مرکز</th>
                                                <th scope="col">شماره اتاق</th>
                                            <? elseif ($data_array["type"] == "faculty") : ?>
                                                <th scope="col">نام و نام خانوادگی</th>
                                                <th scope="col">شماره اتاق</th>
                                                <th scope="col">شماره تماس</th>
                                            <? endif; ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?
                                        $data = $data_array["child"];
                                        foreach ($data as $entry) : ?>
                                        <tr>
                                                
                                                <? if ($data_array["type"] == "office") : ?>
                                                    <td><?echo $entry["title"];?></td>
                                                    <td><?echo $entry["phone_number"];?></td>
                                                <? elseif ($data_array["type"] == "lab") : ?>
                                                    <td><?echo $entry["title"];?></td>
                                                    <td><?echo $entry["room_number"];?></td>
                                                <? elseif ($data_array["type"] == "center") : ?>
                                                    <td><?echo $entry["title"];?></td>
                                                    <td><?echo $entry["room_number"];?></td>
                                                <? elseif ($data_array["type"] == "faculty") : ?>
                                                    <td><?echo $entry["title"];?></td>
                                                    <td><?echo $entry["room_number"];?></td>
                                                    <td><?echo $entry["phone_number"];?></td>
                                                <? endif; ?>
                                        </tr>
                                        <?
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    <?

                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?
endforeach;
?>