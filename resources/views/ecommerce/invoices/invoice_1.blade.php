@extends('layouts.invoice.master')

@section('style')
<style type="text/css">
    body{
      font-family: 'Poppins', sans-serif;
      display: block;
      color: #000248;
    }
    .table-wrapper {
      width: 1120px;
      margin: 0 auto;
    }
    h2 {
      margin: 0;
      font-weight: 500;
      font-size: 40px;
    }
    h6 {
      font-size: 18px;
      font-weight: 400;
      line-height: 1.5;
      margin: 0;
    }
    span {
      font-size: 18px;
      line-height: 1.5;
      font-weight: 400;
    }
    .banner-image {
      margin: 13px 0 10px;
    }
    .order-details td span {
      margin-bottom: -4px;
      display: block;
    }
    .order-details th:first-child, .order-details td:first-child {
      min-width: 490px;
    }
    .order-details th:nth-child(2), .order-details td:nth-child(2) {
      width: 20%;
    }
    @media (max-width: 1199px) {
      .table-wrapper {
        width: 930px;
      }
      .address {
        width: 21% !important;
      }
    }
  </style>
@endsection

@section('main_content')
<table class="table-wrapper">
    <tbody> 
      <tr> 
        <td> 
          <table class="logo-wrappper" style="width: 100%;">
            <tbody>
              <tr>
                <td><img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="logo"><span style="color: #52526C;opacity: 0.8;display:block;margin-top: 10px;">202-555-0258</span></td>
                <td class="address" style="text-align: right; color: #52526C;opacity: 0.8; width: 16%;"><span>
                    1982 Harvest Lane New York, NY12210
                     United State</span></td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr> 
        <td> <img class="banner-image" src="{{ asset('assets/images/email-template/invoice-1/1.png') }}" alt="background" style="width: 100%"></td>
      </tr>
      <tr> 
        <td> 
          <table class="bill-content" style="width: 100%;">
            <tbody> 
              <tr> 
                <td style="width: 36%"><span style="color: #52526C;opacity: 0.8;">Billed To</span>
                  <h6 style="width: 46%">Crocs Matchett Vandelay Group LTD </h6>
                </td>
                <td style="width: 21%;"><span style="color: #52526C;opacity: 0.8;">Invoice Date</span>
                  <h6>09/03/2024</h6>
                </td>
                <td><span style="color: #52526C;opacity: 0.8;">Invoice Number</span>
                  <h6>#VL25000365</h6>
                </td>
                <td style="text-align: right;"><span style="color: #52526C;opacity: 0.8;">Amount Dus (USD)</span>
                  <h2>$10,908.00</h2>
                </td>
              </tr>
              <tr> 
                <td style="width: 36%">
                  <h6 style="width: 63%;padding-top: 20px;">2118 Thornridge Cir. Syracuse, Connecticut 35624, United State</h6>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr> 
        <td> 
          <table class="order-details" style="width: 100%;border-collapse: separate;border-spacing: 0 10px;">
            <thead> 
              <tr style="background: #5C61F2;border-radius: 8px;overflow: hidden;box-shadow: 0px 10.9412px 10.9412px rgba(0, 141, 171, 0.02), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;"> 
                <th style="padding: 18px 15px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;text-align: left"><span style="color: #fff;">Description</span></th>
                <th style="padding: 18px 15px;text-align: left"><span style="color: #fff;">Rate</span></th>
                <th style="padding: 18px 15px;text-align: left"><span style="color: #fff;">Qty</span></th>
                <th style="padding: 18px 15px;border-top-right-radius: 8px;border-bottom-right-radius: 8px;text-align: right"><span style="color: #fff;">Line Total</span></th>
              </tr>
            </thead>
            <tbody> 
              <tr style="box-shadow: 0px 10.9412px 10.9412px rgba(0, 141, 171, 0.02), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;"> 
                <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span style="min-width: 7px;height: 7px;border: 4px solid #5C61F2;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Project</span></td>
                <td style="padding: 18px 15px;"><span>$4,000.00</span></td>
                <td style="padding: 18px 15px;"> <span>1</span></td>
                <td style="padding: 18px 15px;text-align: right"><span>$4,000.00</span></td>
              </tr>
              <tr style="box-shadow: 0px 10.9412px 10.9412px rgba(0, 141, 171, 0.02), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;"> 
                <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span style="min-width: 7px;height: 7px;border: 4px solid #FF3364;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Creative Design</span></td>
                <td style="padding: 18px 15px;"> <span>$8,000.00</span></td>
                <td style="padding: 18px 15px;"> <span>2</span></td>
                <td style="padding: 18px 15px;text-align: right"> <span>$16,000.00</span></td>
              </tr>
              <tr style="box-shadow: 0px 10.9412px 10.9412px rgba(0, 141, 171, 0.02), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;"> 
                <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span style="min-width: 7px;height: 7px;border: 4px solid #FFAE46;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Web Development</span></td>
                <td style="padding: 18px 15px;"> <span>$2,000.00</span></td>
                <td style="padding: 18px 15px;"> <span>2</span></td>
                <td style="padding: 18px 15px;text-align: right"> <span>$4,000.00</span></td>
              </tr>
              <tr style="box-shadow: 0px 10.9412px 10.9412px rgba(0, 141, 171, 0.02), 0px 9.51387px 7.6111px rgba(82, 77, 141, 0.06), 0px 5.05275px 4.0422px rgba(82, 77, 141, 0.0484671);border-radius: 5.47059px;"> 
                <td style="padding: 18px 15px;display:flex;align-items: center;gap: 10px;"><span style="min-width: 7px;height: 7px;border: 4px solid #54BA4A;background: #fff;border-radius: 100%;display: inline-block;"></span><span>Graphics Design</span></td>
                <td style="padding: 18px 15px;"> <span>$2,000.00</span></td>
                <td style="padding: 18px 15px;"> <span>1</span></td>
                <td style="padding: 18px 15px;text-align: right"> <span>$2,000.00</span></td>
              </tr>
              <tr> 
                <td> </td>
                <td> </td>
                <td style="padding: 5px 0; padding-top: 15px;"> <span style="color: #52526C;">Subtotal</span></td>
                <td style="padding: 5px 0;text-align: right;padding-top: 15px;"><span>$26,000.00</span></td>
              </tr>
              <tr> 
                <td> </td>
                <td> </td>
                <td style="padding: 5px 0;padding-top: 0;"> <span style="color: #52526C;">Tax(5%)</span></td>
                <td style="padding: 5px 0;text-align: right;padding-top: 0;"><span>$1,000.00</span></td>
              </tr>
              <tr> 
                <td> </td>
                <td> </td>
                <td style="padding: 10px 0;"> <span style="font-weight: 600;">Amount Due (USD)</span></td>
                <td style="padding: 10px 0;text-align: right"><span style="font-weight: 600;">$27,000.00</span></td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
    <tr style="width: 100%; display: flex; justify-content: space-between; margin-top: 12px;">
      <td> <img src="{{ asset('assets/images/email-template/invoice-1/sign.png') }}" alt="sign"><span style="display:block;background: rgba(82, 82, 108, 0.3);height: 1px;width: 200px;margin-bottom:10px;"></span><span style="color: rgba(82, 82, 108, 0.8);">Authorized Sign</span></td>
      <td> <span style="display: flex; justify-content: flex-end; gap: 15px;"><a style="background: #5C61F2; color:rgba(255, 255, 255, 1);border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;" href="#!" onclick="window.print();">Print Invoice<i class="icon-arrow-right" style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a><a style="background: rgba(92, 97, 242, 0.1);color: #5C61F2;border-radius: 10px;padding: 18px 27px;font-size: 16px;font-weight: 600;outline: 0;border: 0; text-decoration: none;" href="{{ route('admin.invoice_1') }}" download="">Download<i class="icon-arrow-right" style="font-size:13px;font-weight:bold; margin-left: 10px;"></i></a></span></td>
    </tr>
  </table>
@endsection

