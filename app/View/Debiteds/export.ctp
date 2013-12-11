<?php
App::import('Vendor','xtcpdf');  
$tcpdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

$tcpdf->setFontSubsetting(true);
$tcpdf->SetFont($textfont, '', 8);

$date = new DateTime('now');
$sdate = $date->format('d/m/Y');
$nowdate = explode('/',$sdate);

$tcpdf->AddPage(); 

$html = '<table style="border-collapse: collapse;" border="0" width="500">
            <tr>
                <td style="width: 80px;">
                </td>
                <td style="vertical-align: top; width: 300px;">
                    <table border="0">
                        <tr>
                            <td colspan="2"><span style="font-weight: bold;">'.$info['Info']['name'].'</span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><span style="font-weight: bold; font-style: italic;">'.$info['Info']['address'].'</span></td>
                        </tr>
                        <tr>
                            <td width="50%"><span style="font-weight: bold;">Tel:</span> '.$info['Info']['phone'].'</td>
                            <td width="50%"><span style="font-weight: bold;">Fax:</span> '.$info['Info']['fax'].'</td>
                        </tr>
                    </table>
                </td>
                <td style="vertical-align: top; width: 110px;">
                     <table border="0">
                        <tr>
                            <td>Phiếu: '.$bill['Debited']['id'].'</td>
                        </tr>
                        <tr>
                            <td>Ngày: '.$bill['Debited']['time'].'</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3" style="text-align: center; font-size: 1.4em; font-weight: bold;">
                          PHIẾU XUẤT HÀNG
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3">
                    <table width="100%">
                        <tr>
                            <td width="80">Họ tên người nhận:</td>
                            <td colspan="2" style="font-weight: bold;">'.$bill['customer']['name'].'</td>
                        </tr>
                        <tr>
                            <td width="80">Địa chỉ:</td>
                            <td>'.$bill['customer']['address'].'</td>
                            <td width="200">Điện thoại: '.$bill['customer']['phone'].'</td>
                        </tr>
                         <tr>
                            <td width="80">Ghi chú:</td>
                            <td colspan="2">'.$bill['Debited']['description'].'</td>
                        </tr>
                        <tr>
                            <td width="80">Ngày giao:</td>
                            <td colspan="2">'.$sdate.'</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3">
                    <table width="500" border="1" cellpadding="1" cellspacing="0">
                        <tr>
                            <td valign="middle" style="width: 25px; text-align: center; font-weight: bold;">STT</td>
                            <td valign="middle" style="width: 40px; text-align: center; font-weight: bold;">Mã hàng</td>
                            <td valign="middle" style="width: 150px; text-align: center; font-weight: bold;">Tên hàng</td>
                            <td valign="middle" style="width: 40px; text-align: center; font-weight: bold;">Đơn vị</td>
                            <td valign="middle" style="width: 50px; text-align: center; font-weight: bold;">Số lượng</td>
                            <td valign="middle" style="width: 50px; text-align: center; font-weight: bold;">Đơn giá</td>
                            <td valign="middle" style="width: 55px; text-align: center; font-weight: bold;">Thành tiền</td>
                            <td valign="middle" style="width: 50px; text-align: center; font-weight: bold;">Chiết khấu</td>
                            <td valign="middle" style="width: 50px; text-align: center; font-weight: bold;">Thanh toán</td>
                        </tr>';
$price = 'price';
if($bill['customer']['isPartner'] == 1){
   $price = 'wholesale'; 
}else if($bill['customer']['isCustomer'] == 1){
   $price = 'retail'; 
}
$tongtien = 0;
             for($i=0; $i<count($detailbills); $i++){
                $tong = $detailbills[$i]['Detailstock']['quantityExport']*$detailbills[$i]['products'][$price];
                $tongtien += $tong;
                $html .= '<tr valign="middle"><td style="text-align: center;">'.($i+1).'</td>
                            <td style="text-align: center;">'.$detailbills[$i]['products']['id'].'</td>
                            <td>'.$detailbills[$i]['products']['nameProduct'].'</td>
                            <td style="text-align: right;">'.$detailbills[$i]['units']['nameUnit'].'</td>
                            <td style="text-align: right;">'.$detailbills[$i]['Detailstock']['quantityExport'].'</td>
                            <td style="text-align: right;">'.number_format($detailbills[$i]['products'][$price], 0, ',', '.').'</td>
                            <td style="text-align: right;">'.number_format($tong, 0, ',', '.').'</td>
                            <td style="text-align: right;">0</td>
                            <td style="text-align: right;">'.number_format($tong, 0, ',', '.').'</td></tr>';
            } 
$chietkhau = ($tongtien*$bill['customer']['discount'])/100; 
$tongthanhtien = $tongtien - $chietkhau;                      
$html .= '<tr>
                            <td colspan="8" style="font-weight: bold; text-align: right;">Cộng:</td>
                            <td style="text-align: right;"><span style="font-weight: bold;">'.number_format($tongtien, 0, ',', '.').'</span></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-weight: bold; text-align: right;">CK(%):</td>
                            <td>'.$bill['customer']['discount'].'%</td>
                            <td colspan="2" style="font-weight: bold; text-align: right;">Chiết khấu:</td>
                            <td style="text-align: right;"><span style="font-weight: bold;">'.number_format($chietkhau, 0, ',', '.').'</span></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="font-weight: bold; text-align: right;">Thuế GTGT:</td>
                            <td>0%</td>
                            <td colspan="2" style="font-weight: bold; text-align: right;">Tiền thuế GTGT:</td>
                            <td style="text-align: right;"><span style="font-weight: bold;">0</span></td>
                        </tr>
                        <tr>
                            <td colspan="8" style="font-weight: bold; text-align: right;">Tổng thành tiền:</td>
                            <td style="text-align: right;"><span style="font-weight: bold;">'.number_format($tongthanhtien, 0, ',', '.').'</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3" style="text-align: right;">
                    Ngày: '.$sdate.'
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%">
                        <tr>
                            <td width="100"> 
                                <p style="font-weight: bold; text-align: center;">Người lập phiếu<br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span> 
                                </p>
                            </td>
                            <td width="100">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Người nhận hàng <br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                            <td width="100">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Thủ kho <br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                            <td width="100">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Kế toán trưởng<br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                            <td width="100">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Thủ trưởng<br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>';
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Hoa_Don_Xuat_'.$bill['customer']['id'].'_'.implode('_',$nowdate).'.pdf';
$tcpdf->Output($filename, 'D'); 
?>