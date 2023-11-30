<?php
require_once("conn.php");
if (isset($_REQUEST['inv_id'])) {
  $iid = $_REQUEST['inv_id'];
  $q = mysqli_query($conn, "SELECT * FROM invoice WHERE quot_id='$iid' ") or die(mysqli_error());
  $r = mysqli_fetch_array($q);
  $quotno = $r['quot_no'];
  $order_no = $r['order_no'];
  $inv_date = $r['inv_date'];
  $order_date = $r['order_date'];
  $quot_cust = $r['quot_cust'];
  $conname = $r['conname'];
  $Transportation = $r['transmode'];
  $lr_no = $r['lrno'];
  $supplydate = $r['supplydate'];
  $vehicleno = $r['vehicleno'];
  $subtotal = $r['subtotal'];
  $packing = $r['packing'];
  $transportation = $r['transpotation'];
  $cgst = $r['cgst'];
  $sgst = $r['sgst'];
  $igst = $r['igst'];
  $action = 'UPDATE';
} else {
  $action = 'INSERT';
  $c_year = date('Y');
  $c_month = date('m');
  "select * from invoice where year(inv_date)='$c_year' order by q_n desc limit 1 ";
  $check_query = mysqli_query($conn, "select * from invoice where year(inv_date)='$c_year' order by q_n desc limit 1 ") or die(mysqli_error());
  if (mysqli_num_rows($check_query)) {
    $row = mysqli_fetch_array($check_query);
    $quotno = intval($row['q_n']) + intval(1);
    //$quotno = 'SRL'.date('M').$quotno;
    $quotno = $quotno;
  } else {
    $quotno = '1';
  }
}
?>
<style>
  .white-class {
    color: #fff;
  }

  .black-class {
    color: #000;
  }
</style>
<!DOCTYPE html>
<html>

<head>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/core.css" rel="stylesheet" type="text/css" />
  <link href="css/components.css" rel="stylesheet" type="text/css" />
  <link href="css/icons.css" rel="stylesheet" type="text/css" />
  <link href="css/pages.css" rel="stylesheet" type="text/css" />
  <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="select2-master/dist/css/select2.min.css">
</head>

<body>
  <?php include_once("menu.php"); ?>
  <div class="content-page">
    <!-- Start content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="col-md-12 panel-content bg-dark">
                    <form class="form-horizontal" id="quot_entry">

                      <input type="hidden" value="<?php echo $action; ?>" name="action">
                      <input type="hidden" value="<?php if (isset($_REQUEST['inv_id'])) {
                                                    echo $iid;
                                                  } ?>" name="inv_id">

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box">


                            <div class="row">
                              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label class="col-md-4 control-label">Invoice No: </label>
                                  <div class="col-md-8">
                                    <input type="text" data-error="Enter Quotation No" required="required" value="<?php echo $quotno; ?>" name="quot_no" class="form-control " readonly>
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-2"></div>
                              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label class="col-md-3 control-label">order No: </label>
                                  <div class="col-md-7">
                                    <input type="text" data-error="" required="" value="<?php if (isset($order_no)) {
                                                                                          echo $order_no;
                                                                                        } ?>" name="order_no" class="form-control" placeholder="Enter order no">
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label class="col-md-4 control-label">Invoice Date: </label>
                                    <div class="col-md-8">
                                      <input type="text" data-error="Enter Invoice Date" required="required" value="<?php if (isset($inv_date)) {
                                                                                                                      echo date('d / M / Y', strtotime($inv_date));
                                                                                                                    } else {
                                                                                                                      echo date('d / M / Y', strtotime($current_date));
                                                                                                                    } ?>" name="inv_date" class="form-control ">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-2 col-md-2"></div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">order Date: </label>
                                    <div class="col-md-7">
                                      <input type="date" data-error="" required="" value="<?php if (isset($order_date)) {
                                                                                            echo date('Y-m-d', strtotime($order_date));
                                                                                          } else {
                                                                                            echo date('Y-m-d', strtotime($current_date));
                                                                                          } ?>" name="order_date" class="form-control " placeholder=" Enter order date">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="bg-grey m-l-15 m-r-15">
                                  <h4 class="header-title m-t-0 m-b-30">Invoice To :</h4>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-0">
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-0">
                                    <div class="form-group">
                                      <label class="col-md-4 control-label">Customer Name: </label>
                                      <div class="col-md-8">
                                        <select name="q_custname" class="form-control select2">
                                          <option selected>--CUSTOMER NAME--</option>
                                          <?php
                                          $sql = mysqli_query($conn, "select * from customer") or die(mysqli_error());
                                          while ($row = mysqli_fetch_array($sql)) {
                                          ?>
                                            <option value="<?php echo $row['id']; ?>" <?php if (isset($quot_cust)) {
                                                                                        if ($quot_cust == $row['id']) {
                                                                                          echo "selected";
                                                                                        }
                                                                                      } ?>><?php echo $row['custname']; ?></option>
                                          <?php } ?>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-md-4 control-label">Transportation Mode: </label>
                                      <div class="col-md-8">
                                        <input type="text" name="transmode" class="form-control " id="transmode" placeholder="Transportation Mode" value="<?php if (isset($Transportation)) {
                                                                                                                                                            echo $Transportation;
                                                                                                                                                          } ?>">
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-md-4 control-label">Supply Date: </label>
                                      <div class="col-md-8">
                                        <input type="date" name="supplydate" class="form-control " id="supplydate" value="<?php if (isset($supplydate)) {
                                                                                                                            echo date('Y-m-d', strtotime($supplydate));
                                                                                                                          } else {
                                                                                                                            echo date('Y-m-d', strtotime($current_date));
                                                                                                                          } ?>">
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>



                                  </div>

                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <label class="col-md-4 control-label">Consignee Name: </label>
                                      <div class="col-md-8">
                                        <select name="cons_name" class="form-control select2">
                                          <option selected>--CONSIGNEE NAME--</option>
                                          <?php
                                          $sql = mysqli_query($conn, "select * from consignee") or die(mysqli_error());
                                          while ($row = mysqli_fetch_array($sql)) {
                                          ?>
                                            <option value="<?php echo $row['id']; ?>" <?php if (isset($conname)) {
                                                                                        if ($conname == $row['id']) {
                                                                                          echo "selected";
                                                                                        }
                                                                                      } ?>><?php echo $row['custname']; ?></option>
                                          <?php } ?>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-md-4 control-label">LR NO: </label>
                                      <div class="col-md-8">
                                        <input type="text" name="lrno" class="form-control " id="lrno" placeholder="LR NO" value="<?php if (isset($lr_no)) {
                                                                                                                                    echo $lr_no;
                                                                                                                                  } ?>">
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-md-4 control-label">Vehicle No: </label>
                                      <div class="col-md-8">
                                        <input name="vehicleno" class="form-control" placeholder="Vehicle Number" value="<?php if (isset($vehicleno)) {
                                                                                                                            echo $vehicleno;
                                                                                                                          } ?>">
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-grey">
                                  <h4 class="header-title m-t-0 m-b-30">Invoice Details :</h4>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-0">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group text-right m-r-10">
                                      <!--    <button type="button" class="btn btn-warning waves-effect w-md waves-light m-b-5" onClick="clone_items()">Add New Row</button>
   -->
                                    </div>
                                  </div>

                                  <div class="col-xl-20 col-xl-16 col-sm-20 col-xs-16 items">
                                    <table width="100%" style="overflow-x: none !important;">
                                      <tr>
                                        <th class="thd col-sm-2 column">
                                          <label>Product </label>
                                        </th>
                                        <th class="thd col-sm-12-1 column">
                                          <label>Qty.</label>
                                        </th>
                                        <th class="thd col-sm-1 column">
                                          <label>Unit </label>
                                        </th>
                                        <th class="thd col-sm-12-1 column">
                                          <label>Rate </label>
                                        </th>
                                        <th class="thd col-sm-1 column">
                                          <label>Amount </label>
                                        </th>
                                        <th class="thd col-sm-12-1 column">
                                          <label>Dis.% </label>
                                        </th>
                                        <th class="thd col-sm-1 column">
                                          <label>Taxable Value </label>
                                        </th>

                                      </tr>

                                      <tbody id="">
                                        <tr>
                                          <td class="tda col-lg-2 column">
                                            <select id="item_qty" name="item_qty" class="form-control select2">
                                              <option value="" selected>-Select item-</option>
                                              <?php
                                              $retrive_query = mysqli_query($conn, "select * from item_detail") or die(mysqli_error());
                                              while ($row = mysqli_fetch_array($retrive_query)) {
                                                $id = $row['p_sno']; ?>
                                                <option value="<?php echo $id ?>"> <?php echo $row['p_name'] ?></option>
                                              <?php }  ?>
                                            </select>
                                            <!-- <input type="text" data-error="Enter Item Name" required="required" name="item_name[]" class="form-control" >
				-->
                                          </td>
                                          <td class="tda">
                                            <input type="number" data-error="Enter Quantity" id="item_quantity" placeholder="0" name="qty" class="form-control " onchange="change_tot()">
                                          </td>
                                          <td class="tda">
                                            <select id="unit" name="unit" class="form-control select2">
                                              <option value="pcs">pcs</option>
                                            </select>
                                          </td>
                                          <td class="tda">
                                            <input type="number" data-error="Enter Rate" id="rate" name="rate" step="0.01" class="form-control " placeholder="0.00" onchange="change_tot()">
                                          </td>

                                          <td class="tda">
                                            <input type="text" id="item_total" name="total" class="form-control " step="0.01" placeholder="0.00" readonly>
                                          </td>

                                          <td class="tda">
                                            <input type="number" id="discount" name="discount" class="form-control " step="0.01" placeholder="0.00%" onChange="change_tott()" value="<?php echo "0.00"; ?>">
                                          </td>

                                          <td class="tda">
                                            <input type="number" id="taxableval" name="taxableval" step="0.01" class="form-control " placeholder="0.00" readonly>
                                          </td>

                                          <td class="tda ">
                                            <button type="button" class="btn btn-warning waves-effect w-md waves-light m-b-10" onclick="clone_items()">Save</button>
                                          </td>

                                        </tr>
                                        <tr>
                                          <td colspan="5">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <table class="table table-striped table-bordered">
                                      <thead>
                                        <th class="thd col-lg-4 column ">
                                          <label>Product </label>
                                        </th>
                                        <th class="thd">
                                          <label>Qty</label>
                                        </th>
                                        <th class="thd">
                                          <label>Unit</label>
                                        </th>
                                        <th class="thd">
                                          <label>Rate (<i class="fa fa-rupee"></i>) </label>
                                        </th>
                                        <th class="thd">
                                          <label>Amount (<i class="fa fa-rupee"></i>) </label>
                                        </th>

                                        <th class="thd">
                                          <label>Dis% </label>
                                        </th>
                                        <th class="thd ">
                                          <label>Taxable Value (<i class="fa fa-rupee"></i>) </label>
                                        </th>


                                        <td>
                                          Action
                                          </th>
                                      </thead>
                                      <tbody id="clone_items_desc">
                                        <?php
                                        if (isset($_REQUEST['inv_id'])) {
                                          $qr = mysqli_query($conn, "SELECT t1.*,t2.p_name as pName FROM invoice_desc t1 left join item_detail t2 on t1.item_desc=t2.p_sno WHERE t1.quot_id='$iid' ") or die(mysqli_error());
                                          while ($qrR = mysqli_fetch_array($qr)) {
                                        ?>
                                            <tr style="background-color:white;">
                                              <td class="tda">
                                                <input type="text" data-index="" data-error="Enter Item Name" readonly required="required" name="item_name[]" value="<?php echo $qrR['pName']; ?>" class="form-control"><input type="hidden" data-index="" name="item_id[]" value="<?php echo $qrR['item_desc']; ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <input type="text" data-index="" readonly data-error="Enter Quantity" required="required" name="item_quantity[]" value="<?php echo $qrR['quantity']; ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <input type="text" data-index="" readonly data-error="Enter unit" required="required" name="unit[]" value="<?php echo $qrR['unit'] ?>" class="form-control">
                                              </td>
                                              <td class="tda black-class">
                                                <input type="text" data-index="" readonly data-error="Enter rate" required="required" name="item_rate[]" value="<?php echo $qrR['rate'] ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <input type="number" data-index="" readonly required="required" id="item_total" name="item_total[]" value="<?php echo $qrR['total'] ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <input type="number" data-index="'+count_row+'" readonly required="required" id="discount" name="discount[]" value="<?php echo $qrR['dis'] ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <input type="number" readonly required="required" id="taxableval" name="taxableval[]" value="<?php echo $qrR['tax_val'] ?>" class="form-control">
                                              </td>
                                              <td class="tda">
                                                <i class="fa fa-remove fa-2x" style="color:black" id="srno" onclick="remove_fun(this)"></i>
                                              </td>
                                            </tr>
                                        <?php }
                                        } ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>

                              <hr class="m-t-0">

                              <div class="row">
                                <div class="col-md-7 col-lg-7"></div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                  <div class="form-group">
                                    <label class="col-md-5 control-label">Sub Total (<i class="fa fa-rupee"></i>):</label>
                                    <div class="col-md-7">
                                      <input type="number" required="required" id="sub_total" name="sub_total" class="form-control " readonly value="<?php if (isset($subtotal)) {
                                                                                                                                                        echo $subtotal;
                                                                                                                                                      } ?>">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-7 col-lg-7"></div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                  <div class="form-group">
                                    <label class="col-md-5 control-label">Packing Charge (<i class="fa fa-rupee"></i>) :</label>
                                    <div class="col-md-7">
                                      <input type="text" name="packing" id="packing" class="form-control " onchange="totalAdd(this.value)" value="<?php if (isset($packing)) {
                                                                                                                                                    echo $packing;
                                                                                                                                                  } else {
                                                                                                                                                    echo "0.00";
                                                                                                                                                  } ?>">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="row">
                                <div class="col-md-7 col-lg-7"></div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                  <div class="form-group">
                                    <label class="col-md-5 control-label">Transportation charge (<i class="fa fa-rupee"></i>) :</label>
                                    <div class="col-md-7">
                                      <input type="text" name="frieght" id="frieght" class="form-control " onchange="totalAdd(this.value)" value="<?php if (isset($transportation)) {
                                                                                                                                                    echo $transportation;
                                                                                                                                                  } else {
                                                                                                                                                    echo "0.00";
                                                                                                                                                  } ?>">
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <legend></legend>
                              <div class="row">
                                <div class="col-md-7 col-lg-7"></div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                  <div class="form-group">
                                    <label class="col-md-5 control-label">Net Total (<i class="fa fa-rupee"></i>) :</label>
                                    <div class="col-md-7">
                                      <input type="text" required="required" name="net_total" id="net_total" class=" form-control" readonly>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>



                              <div class="row">

                                <div class="col-sm-8 "></div>
                                <div class="col-sm-1 form-group"><label> Add. CGST @ </label></div>
                                <div class="col-sm-1">
                                  <input type="text" id="cgst" class="form-control " name="cgstper" onkeyup="add_cgst(this.value)" value="<?php if (isset($cgst)) {
                                                                                                                                            echo $cgst;
                                                                                                                                          } else {
                                                                                                                                            echo "0";
                                                                                                                                          } ?>">
                                  <input type="hidden" name="addCgstTo" id="addCgstTo" value='0'>
                                </div>
                                <div class="col-sm-2"><input type="text" value="0" name="cgst_tot" id="cgst_tot" class=" form-control col-md-3 column" readonly></div>
                              </div>
                              <div class="row">

                                <div class="col-sm-8 "></div>
                                <div class="col-sm-1 form-group"><label> Add.UTGST @ </label></div>
                                <div class="col-sm-1">
                                  <input type="text" id="sgst" class="form-control " name="sgstper" onkeyup="add_sgst(this.value)" value="<?php if (isset($sgst)) {
                                                                                                                                            echo $sgst;
                                                                                                                                          } else {
                                                                                                                                            echo "0";
                                                                                                                                          } ?>">
                                </div>
                                <div class="col-sm-2"><input type="text" value="0" name="sgst_tot" id="sgst_tot" class=" form-control col-md-3 column" readonly></div>
                              </div>

                              <div class="row">

                                <div class="col-sm-8 "></div>
                                <div class="col-sm-1 form-group"><label> Add. IGST @ </label></div>
                                <div class="col-sm-1">
                                  <input type="text" id="igst" class="form-control " name="igstper" onkeyup="add_igst(this.value)" value="<?php if (isset($igst)) {
                                                                                                                                            echo $igst;
                                                                                                                                          } else {
                                                                                                                                            echo "0";
                                                                                                                                          } ?>">
                                </div>
                                <div class="col-sm-2"><input type="text" value="0" name="igst_add" id="igst_add" class=" form-control col-md-3 column" readonly></div>
                              </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-7 col-lg-7"></div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              <div class="form-group">
                                <label class="col-md-5 control-label">Round Of Value (<i class="fa fa-rupee"></i>) : </label>
                                <div class="col-md-7">
                                  <input type="text" name="rofval" id="rofval" class=" form-control" readonly>
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-7 col-lg-7"></div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              <div class="form-group">
                                <label class="col-md-5 control-label">Grand Total (<i class="fa fa-rupee"></i>) : </label>
                                <div class="col-md-7">
                                  <input type="text" required="required" name="grand_total" id="grand_total" class=" form-control" readonly>
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-15">
                              <div class="form-group text-center">
                                <button type="submit" class="btn btn-warning waves-effect w-md waves-light m-b-5">Submit</button>
                                <button type="reset" class="btn btn-warning waves-light w-md gray-light m-b-5">Reset</button>
                              </div>
                            </div>
                          </div>

                        </div><!-- end row -->
                    </form>
                  </div><!-- end col -->
                </div>
                <!-- end row -->

              </div> <!-- container -->

            </div><!-- content -->

          </div>
        </div>
      </div>

    </div>

    <div class="footer">
      <div class="copyright">
        <p class="pull-left sm-pull-reset">
          <span>Copyright <span class="copyright">©</span> 2016 </span>

          <span>&nbsp;&nbsp;</span>
        </p>
        <p class="pull-right sm-pull-reset">

        </p>
      </div>
    </div>

  </div>
  <!-- END wrapper -->
</body>

</html>
<script type="text/javascript" src="select2-master/dist/js/select2.min.js"></script>

<script>
  var srno = 0;

  function clone_items() {
    //alert("sdsa");
    var count_row = parseInt($("#row_count").val()) + parseInt(1);
    $("#row_count").val(count_row);
    $("#clone_items_desc").append('<tr style="background-color:white;">' + '<td class="tda">' +
      '<input type="text" data-index="' + count_row + '" data-error="Enter Item Name" readonly required="required" name="item_name[]" value="' + document.getElementById('item_qty').options[document.getElementById('item_qty').selectedIndex].text + '" class="form-control" ><input type="hidden" data-index="' + count_row + '" name="item_id[]" value="' + document.getElementById('item_qty').options[document.getElementById('item_qty').selectedIndex].value + '" class="form-control" >' +
      '</td>' +
      '<td class="tda">' +
      '<input type="text" data-index="' + count_row + '" readonly data-error="Enter Quantity" required="required" name="item_quantity[]" value="' + document.getElementById("item_quantity").value + '" class="form-control" >' +
      '</td>' +
      '<td class="tda">' +
      '<input type="text" data-index="' + count_row + '" readonly data-error="Enter unit" required="required" name="unit[]" value="' + document.getElementById("unit").value + '" class="form-control" >' +
      '</td>' +
      '<td class="tda black-class">' +
      '<input type="text" data-index="' + count_row + '" readonly data-error="Enter rate" required="required" name="item_rate[]" value="' + document.getElementById("rate").value + '" class="form-control" >' +
      '</td>' +
      '<td class="tda">' +
      '<input type="number" data-index="' + count_row + '" readonly required="required" id="item_total" name="item_total[]" value="' + document.getElementById("item_total").value + '" class="form-control" >' +
      '</td>' +
      '<td class="tda">' +
      '<input type="number" data-index="' + count_row + '" readonly required="required" id="discount" name="discount[]" value="' + document.getElementById("discount").value + '" class="form-control" >' +
      '</td>' +

      '<td class="tda">' +
      '<input type="number" data-index="' + count_row + '" readonly required="required" id="taxableval" name="taxableval[]" value="' + document.getElementById("taxableval").value + '" class="form-control" >' +
      '</td>' +


      '<td class="tda">' +
      '<i class="fa fa-remove fa-2x" style="color:black" id="' + srno + '" onclick="remove_fun(this)"></i>' +
      '</td>' +
      '</tr>');
    $("#clone_req_parts").clone().appendTo("#clone_reqparts");

    var sub_tot = document.getElementById("item_total").value;
    var st = document.getElementById("sub_total").value;
    var tv = document.getElementById("taxableval").value;

    document.getElementById("sub_total").value = sub_tot;

    if (st == '') {
      document.getElementById("sub_total").value = tv;

      totalAdd();
      grandTotalFn();
    } else {
      //st = st.toFixed(2);
      //tv = tv.toFixed(2);
      st = parseFloat(st) + parseFloat(tv);
      st = st.toFixed(2);
      document.getElementById("sub_total").value = st;
      var disc = document.getElementById("discount").value;

      totalAdd();
      grandTotalFn();
      if (disc == '') {
        disc = 0;
      }


    }


    srno = srno + 1;
    item_qty.selectedIndex = 0;
    document.getElementById("item_quantity").value = "";
    document.getElementById("rate").value = "";
    document.getElementById("item_total").value = "";

    unit.selectedIndex = 0;
    document.getElementById("discount").value = "";
    document.getElementById("taxableval").value = "";

  }

  function remove_fun(a) {
    $(a).parents("tr").remove();
    //var abc = $(a).parents("tr").(document.getElementsByTagName("input")[3].value).value;
    $(a).closest('tr').find("input:not([name^=item_name],:not([name^=item_total]))").each(function() {
      var s_tot = document.getElementById("sub_total").value;
      var r_tot = this.value;
      //alert(this.value)
      var sb_tot = parseFloat(s_tot) - parseFloat(r_tot);
      document.getElementById("sub_total").value = sb_tot;
      var disc = document.getElementById("discount").value;

      if (disc == '') {
        disc = 0;
      }
      if (sb_tot == 0) {
        document.getElementById("grand_total").value = 0;
        document.getElementById("discount").value = 0;
      } else {
        var grt = parseInt(sb_tot) - parseInt(disc);

        totalAdd();
        grandTotalFn
      }
      //document.getElementById("grand_total").value=sb_tot; 
    });
    //alert(abc);
    //var r_tot = document.getElementById("item_total").value;
    //alert(r_tot);
  }

  function totalAdd() {
    var s = document.getElementById("sub_total").value;
    var c = document.getElementById("packing").value;
    var p = document.getElementById("frieght").value;

    if (c == '') {
      c = 0;
    }
    if (p == '') {
      p = 0;
    }
    if (s == 0) {
      s = 0;
    }
    var gr_tot = parseFloat(c) + parseFloat(p) + parseFloat(s);
    gr_tot = gr_tot.toFixed(2);
    document.getElementById("net_total").value = gr_tot;
    add_cgst();
    add_sgst();
    add_igst();
    grandTotalFn();
  }

  function remove_disc(a) {
    var g_tot = document.getElementById("grand_total").value;
    //var disc = document.getElementById("discount").value;
    var s_tot = document.getElementById("sub_total").value;
    var b = (parseInt(s_tot) * parseInt(a)) / 100;

    var gr_tot = parseInt(s_tot) - parseInt(b);
    document.getElementById("rm_sb_tot").value = gr_tot;
    document.getElementById("grand_total").value = gr_tot;
  }

  function add_cgst(a) {
    var a = document.getElementById("cgst").value;
    var n = document.getElementById("net_total").value;
    var gr_tot = (parseFloat(n) * parseFloat(a)) / 100;
    gr_tot = gr_tot.toFixed(2);

    document.getElementById("cgst_tot").value = gr_tot;
    grandTotalFn();
  }

  function add_sgst(a) {
    var a = document.getElementById("sgst").value;
    var n = document.getElementById("net_total").value;
    var gr_tot = (parseFloat(n) * parseFloat(a)) / 100;
    gr_tot = gr_tot.toFixed(2);
    document.getElementById("sgst_tot").value = gr_tot;
    grandTotalFn();
  }

  function add_igst(a) {
    var a = document.getElementById("igst").value;
    var n = document.getElementById("net_total").value;
    var gr_tot = (parseFloat(n) * parseFloat(a)) / 100;
    gr_tot = gr_tot.toFixed(2);
    document.getElementById("igst_add").value = gr_tot;
    grandTotalFn();
  }

  function grandTotalFn() {

    var a = document.getElementById("cgst_tot").value;
    var b = document.getElementById("sgst_tot").value;
    var c = document.getElementById("igst_add").value;
    if (a == '') {
      a = 0
    }
    if (b == '') {
      b = 0
    }
    if (c == '') {
      c = 0
    }
    var f = document.getElementById("net_total").value;
    var d = parseFloat(a) + parseFloat(b) + parseFloat(c) + parseFloat(f);
    var e = d.toFixed(2);
    var dd = d.toFixed(0);
    var ro = dd - e;
    ro = ro.toFixed(2);
    document.getElementById("rofval").value = ro;
    var ddd = d.toFixed(0);
    document.getElementById("grand_total").value = ddd + ".00";

  }

  function change_tot() {
    //alert(a.value);
    var i = document.getElementById("item_quantity").value;
    // var d = document.getElementById("dis").value;
    //var j = document.getElementById("backage").value;
    //var k = parseInt(i) * parseInt(j);
    var t = document.getElementById("rate").value;
    var k = document.getElementById("discount").value;

    if (i == '' && t == '' && k == '') {
      var i = 0;
      var t = 0;
      var k = 0;

    }
    var stot = t * i;
    stot = stot.toFixed(2);
    var di = (stot * k) / 100;
    var fd = stot - di;
    fd = fd.toFixed(2);
    //alert(stot);
    //var dco= parseInt(s) * praseInt(d);

    document.getElementById("item_total").value = stot;
    document.getElementById("taxableval").value = fd;
    //document.getElementById("taxableval").value
  }

  function change_tott() {
    //alert(a.value);
    //var i = document.getElementById("item_quantity").value;
    var d = document.getElementById("item_total").value;
    //var j = document.getElementById("backage").value;
    //var k = parseInt(i) * parseInt(j);
    var to = document.getElementById("discount").value;
    if (d == '' && to == '') {
      var d = 0;
      var to = 0;
      //var s = 0;	

    }

    var ssstot = (d * to) / 100;
    ssstot = ssstot.toFixed(2);
    var stot = d - ssstot;
    stot = stot.toFixed(2);

    //alert(ssstot);


    document.getElementById("taxableval").value = stot;
  }

  function change_cgst_tot() {
    //alert(a.value);
    //var i = document.getElementById("item_quantity").value;
    var d = document.getElementById("taxableval").value;
    //var j = document.getElementById("backage").value;
    //var k = parseInt(i) * parseInt(j);
    var to = document.getElementById("cgst").value;
    if (d == '' && to == '') {
      var d = 0;
      var to = 0;
      //var s = 0;	

    }

    var ssstot = (parseInt(d) * parseInt(to)) / 100;

    var stot = parseInt(d) + parseInt(ssstot);
    //alert(ssstot);


    document.getElementById("camt").value = stot;
  }
</script>

<script>
  $("#quot_entry").on('submit', (function(e) {
    if (e.isDefaultPrevented()) {} else {
      e.preventDefault();
      $.ajax({
        url: "sqlfiles/quotation.php", // Url to which the request is send
        type: "POST", // Type of request to be send, called as method
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        success: function(data) // A function to be called if request succeeds
        {
          //alert(data);
          if (data.trim() == '2') {
            alert("Bill Update Successfully")
            location.reload();

          } else if (data.trim() == '1') {
            $('.dropify-clear').click();
            alert("Invoice Generated Successfully")
            $('#quot_entry')[0].reset();
            location.href = "quot_list.php";
          }

        }
      });
    }
  }));

  function supName(a) {
    $.post("sqlfiles/supp.php?id=" + a, function(data) {
      var obj = jQuery.parseJSON(data);
      document.getElementById("mo_n").value = obj.cno;
      document.getElementById("gstin").value = obj.gstin;
    });
  }

  function supNamee(b) {
    $.post("sqlfiles/supp.php?id=" + b, function(data) {
      var obj = jQuery.parseJSON(data);
      document.getElementById("cmo_n").value = obj.cno;
      document.getElementById("con_gstin").value = obj.gstin;
    });
  }
</script>
<?php if (isset($_REQUEST['inv_id'])) { ?>
  <script>
    totalAdd();
    grandTotalFn();
  </script>
<?php } ?>
<script>
  $('.select2').select2();
</script>