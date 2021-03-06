<div id="container" class="row well ">  
    <div class="col-lg-12">
        <legend class="lead">නිළධාරී මණ්ඩලය  &nbsp;&nbsp;<?php if(isset($this->officerList[0]['year'])){echo $this->officerList[0]['year'];}?></legend>
    </div>
    <form method="post" id="searchOfficerForm" class="form-horizontal container-fluid" action="<?php echo URL; ?>awamangala/searchOfficers" >  
        <div class="form-group">
            <div class=" col-lg-1">
                <label for="year" class="control-label"><span class="badge">වර්ෂය :- </span></label>
            </div>
            <div class="col-lg-2">
                <input id="year"  name="year" type="number" value="<?php if(isset($this->officerList[0]['year'])){echo $this->officerList[0]['year'];}else{ echo date("Y"); ?>" max="<?php echo (date("Y")+1);} ?>"/>
            </div>
            <!--<input type="text" id="memId"/>-->
            <div class="row col-lg-5" style="text-align: left">
                <button type="submit" id="searchOfficer" class="btn btn-success">සොයන්න&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                <a href="<?php echo URL; ?>awamangala/addOfficer" <?php if(Session::get('rank') <> 'ලේකම්'){echo "disabled";}?>> <button type="button" class="btn btn-success" <?php if(Session::get('rank') <> 'ලේකම්'){echo "disabled";}?>>ඇතුල් කරන්න&nbsp;<span class="glyphicon glyphicon-plus"></span></button></a>
 <!--<button type="submit" id="editId" form="editIdForm"class="btn btn-info" disabled>යාවත්කාල කරන්න&nbsp;<span class="glyphicon glyphicon-edit"></span></button>-->
                <!--<span id="notUsed" hidden>සාමාජික අංකය භාවිතා කර නොමැත.</span>-->
<!--<button type="reset"  class="btn btn-warning">නව තොරතුරු ඉවත් කරන්න&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>-->
            </div>
        </div>
    </form>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="container-fluid ">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table id="officers" class="table table-striped table-bordered DataTable" cellspacing="0" width="100%" role="grid">
                            <thead>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >සාමාජික අංකය</th>
                                    <th    rowspan="1" colspan="1"  >නම</th>
                                    <th    rowspan="1" colspan="1"  >නිළය</th>
                                    <th   rowspan="1" colspan="1"  >ප්‍රදේශය</th>
<!--                                    <th    rowspan="1" colspan="1">City</th>
                                    <th   rowspan="1" colspan="1"  >Related</th>
                                    <th class="no-sort"  rowspan="1" colspan="1">Mobile</th>
                                    <th class="no-sort"   rowspan="1" colspan="1"  >View</th>-->
<!--                                    <th class="no-sort"   rowspan="1" colspan="1"  >Edit</th>-->
                                    <?php if(Session::get('rank') == 'ලේකම්'){echo'<th class="no-sort"   rowspan="1" colspan="1"  >ඉවත් කරන්න</th></tr>';};?>
                            </thead>
<!--                            <tfoot>
                                <tr role="row">
                                    <th    rowspan="1" colspan="1"  >Member ID</th>
                                    <th   rowspan="1" colspan="1"  >Name</th></tr>
                            </tfoot>-->
                            <tbody><?php
                                foreach ($this->officerList as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value['awaMemId'] . '</td>';
                                    echo '<td>' . $value['name'] . '</td>';
                                    echo '<td>' . $value['rank'] . '</td>';
                                    echo '<td>' . $value['area'] . '</td>';
//                                    echo '<td>' . $value['mobTel'] . '</td>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/view/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-eye-open" style="color:blue; text-align: center"></span>';
//                                    echo '<td style="text-align: center;"><a href=" ' . URL . 'viewer/edit/' . $value['viewerId'] . ' "><span class="glyphicon glyphicon-edit" style="color:blue; text-align: center"></span>';
                                    if(Session::get('rank') == 'ලේකම්'){echo '<td style="text-align: center;"><a href=" ' . URL . 'awamangala/officerDelete/' . $value['awaMemId'] . ' " class="deleteButton"><span class="glyphicon glyphicon-trash" style="color:red"></span></a></td>';};
                                    echo '</tr>';
                                }
//                                ?></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    