<?php
App::import('Vendor','xtcpdf');  
$tcpdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

$utf8text = file_get_contents('data/utf8test.txt', false);
$tcpdf->setFontSubsetting(true);
$tcpdf->SetFont($textfont, '', 9);

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
                <td style="vertical-align: top; width: 120px;">
                     <table border="0">
                        <tr>
                            <td>Phiếu: '.$id.'</td>
                        </tr>
                        <tr>
                            <td>Ngày: '.$bill['Debit']['time'].'</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3" style="text-align: center; font-size: 1.4em; font-weight: bold;">
                          PHIẾU NHẬP HÀNG
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3">
                    <table width="100%">
                        <tr>
                            <td width="80">Nhà cung cấp</td>
                            <td width="10">:</td>
                            <td style="font-weight: bold;">'.$bill['suppliers']['nameSupplier'].'</td>
                        </tr>
                        <tr>
                            <td width="80">Địa chỉ</td>
                            <td width="10">:</td>
                            <td style="font-weight: bold;"></td>
                        </tr>
                         <tr>
                            <td width="80">Ghi chú</td>
                            <td width="10">:</td>
                            <td>'.$bill['Debit']['description'].'</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3">
                    <table width="480" border="1" cellpadding="1" cellspacing="0">
                        <tr>
                            <td style="width: 30px; text-align: center; font-weight: bold; padding: 3px 0;">STT</td>
                            <td style="width: 50px; text-align: center; font-weight: bold; padding: 3px 0;">Mã hàng</td>
                            <td style="width: 160px; text-align: center; font-weight: bold; padding: 3px 0;">Tên hàng</td>
                            <td style="width: 60px; text-align: center; font-weight: bold; padding: 3px 0;">Đơn vị</td>
                            <td style="width: 60px; text-align: center; font-weight: bold; padding: 3px 0;">Số lượng</td>
                            <td style="width: 70px; text-align: center; font-weight: bold; padding: 3px 0;">Đơn giá</td>
                            <td style="width: 80px; text-align: center; font-weight: bold; padding: 3px 0;">Thành tiền</td>
                        </tr>';
             for($i=0; $i<count($detailbills); $i++){
                $tong = $detailbills[$i]['Detailstock']['quatity']*$detailbills[$i]['products']['price']; 
                $html .= '<tr><td style="text-align: center; padding: 3px 0;">'.($i+1).'</td>
                        <td style="text-align: center; padding: 3px 0;">'.$detailbills[$i]['products']['id'].'</td>
                        <td>'.$detailbills[$i]['products']['nameProduct'].'</td>
                        <td style="text-align: right; padding: 3px 0;">'.$detailbills[$i]['units']['nameUnit'].'</td>
                        <td style="text-align: right; padding: 3px 0;">'.$detailbills[$i]['Detailstock']['quatity'].'</td>
                        <td style="text-align: right; padding: 3px 0;">'.number_format($detailbills[$i]['products']['price'], 0, ',', '.').'</td>
                        <td style="text-align: right; padding: 3px 0;">'.number_format($tong, 0, ',', '.').'</td></tr>';
            }                       
$html .= '
                        <tr>
                            <td colspan="7"><span style="font-weight: bold; padding: 3px 0;">Cộng:</span> '.number_format($bill['bills']['total'], 0, ',', '.').'</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" style="height: 10px;"></td></tr>
            <tr>
                <td colspan="3" style="text-align: right;">
                    Ngày '.$nowdate[0].' tháng '.$nowdate[1].' năm '.$nowdate[2].'
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%">
                        <tr>
                            <td width="125"> 
                                <p style="font-weight: bold; text-align: center;">Người lập phiếu<br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span> 
                                </p>
                            </td>
                            <td width="125">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Người giao hàng <br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                            <td width="125">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Thủ kho <br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                            <td width="125">
                                <p style="font-weight: bold; text-align: center; padding: 0;margin: 3px 0;">Kế toán trưởng<br>
                                <span style="font-style: italic; font-weight: normal;">(Ký, ghi rõ họ tên)</span>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table> ';
$tcpdf->writeHTML($html, true, false, true, false, '');
$filename = 'Hoa_don_Nhap_'.$bill['suppliers']['id'].'_'.implode('_',$nowdate).'.pdf';
$tcpdf->Output($filename, 'D'); 
?>