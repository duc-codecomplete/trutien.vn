@extends('layouts.news')
@section('content')
<script src="/download/315x280_Canvas.js"></script>
<script src="/download/canvas.js"></script>
<div class="container">
    <nav class="menu">
        <span tab="download" title="Tải game" class="btn download active">
            <canvas id="canvas" width="315" height="280"></canvas>
        </span>
        <span tab="update" title="Tải bản cập nhật" class="btn update"></span>
        <span tab="guide" title="Hướng dẫn cài đặt" class="btn guide"></span>
        <span tab="system" title="Cấu hình yêu cầu" class="btn system"></span>
    </nav>

    <div class="content">
        <div class="block download hyhy download_hyyhy">
            <h1>Bản cài đặt Tru Tiên Việt Nam</h1>
            <p class="col note">Kiến nghị: </p>
            <p class="col" style="margin-top: 5px;">
                <span style="width: 100%; padding-left: 80px;">- Nên dùng để tải nhanh hơn</span>
                <span style="width: 100%; padding-left: 80px;">- Tắt Antivirus trước khi giải nén file</span>
            </p>
            <p class="col note" style="margin-top: 5px;">Ưu điểm:</p>
            <p class="col" style="margin-top: 5px;">
                <span style="width: 100%; padding-left: 80px;">Tải với tốc độ nhanh và ổn định</span>
                <span style="width: 100%; padding-left: 80px;">Tích hợp chức năng tải tiếp (Resume) khi bị mất
                    kết nối mạng giữa chừng</span>
            </p>
            <p class="col note" style="margin-top: 5px;">Nhược điểm:</p>
            <p class="col" style="margin-top: 5px;">
                <span style="width: 100%; padding-left: 80px;">Không hỗ trợ trên winXP</span>
            </p>
            <table style="border-right: 1px solid #d7d8d9;border-left: 1px solid #d7d8d9;">
                <thead>
                    <tr>
                        <th>Tên tập tin</th>
                        <th>Kích thước tập tin</th>
                        <th>Máy Chủ</th>
                        <th>Tải về liên kết</th>
                        <!-- <th>Phiên bản hiện hành</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>TruTienVietNam.zip</b></td>
                        <td>12.1 GB</td>
                        <td>Google Driver</td>
                        <td><a target="_blank" class="gdownloader-2" href="https://drive.google.com/file/d/18nVViMHEP6d4S3HW73EaVAZK8cA9f2qo/view?usp=sharing">
                                <img style="max-width: 100%; height: 50px;" src="/download/download_button.png" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td><b>TruTienVietNam.zip</b></td>
                        <td>12.1 GB</td>
                        <td>Google Driver 2</td>
                        <td><a target="_blank" class="gdownloader-2" href="https://drive.google.com/file/d/15iNTyaqwVqECUqM6vLoTaFghXG3pHCWE/view?usp=sharing">
                                <img style="max-width: 100%; height: 50px;" src="/download/download_button.png" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td><b>TruTienVietNam.zip</b></td>
                        <td>12.1 GB</td>
                        <td>Trực Tiếp</td>
                        <td><a class="gdownloader-2" href="https://patcher.trutien.vn/TruTienVietNam.zip">
                                <img style="max-width: 100%; height: 50px;" src="/download/download_button.png" alt="">
                            </a></td>
                    </tr>
                    <tr>
                        <td><b>TruTienVietNam.zip</b></td>
                        <td>12.1 GB</td>
                        <td>Fshare</td>
                        <td><a target="_blank" class="gdownloader-2" href="https://www.fshare.vn/file/IJVJQSIVM816">
                                <img style="max-width: 100%; height: 50px;" src="/download/download_button.png" alt="">
                            </a></td>
                    </tr>
                </tbody>
            </table>

            <p class="col" style="margin-top: 15px;">
                <span style="width: 100%;">Hướng dẫn: <a style="text-decoration: underline;" target="_blank"
                        href="/">Xem
                        thêm tại đây!</a></span>
            </p>
        </div>

        <div class="block update hide">
            <h1>Tải bản cập nhật</h1>
            <!-- <span class="title">FShare</span>
                <table>
                    <thead>
                        <tr>
                            <th>Tên tập tin</th>
                            <th>Kích thước tập tin</th>
                            <th>Tải về liên kết</th>
                            <th>Phiên bản hiện hành</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Bản cập nhật</td>
                            <td>2.5GB</td>
                            <td><a target="_blank" href="https://www.fshare.vn/folder/1SK986UHMFW4" title="Bản cập nhật(Fshare)">Fshare liên kết</a></td>
                            <td>1.161</td>
                        </tr>
                    </tbody>
                </table> -->
            <span class="title">HTTP</span>
            <!-- <table>
                    <thead>
                        <tr>
                                                            </tr>
                    </thead>

                    <tbody>
                                                    </tbody>
                </table> -->
            <table>
                <thead>
                    <tr>
                        <th>Tên tập tin</th>
                        <th>Kích thước tập tin</th>
                        <th>Tải về liên kết</th>
                        <th>Phiên bản hiện hành</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Patch 311-312</td>
                        <td>39,2KB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.311-0.0.1.312.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.311-0.0.1.312</td>
                    </tr>
                    <tr>
                        <td>Patch 310-311</td>
                        <td>3,91MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.310-0.0.1.311.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.310-0.0.1.311</td>
                    </tr>
                    <tr>
                        <td>Patch 309-310</td>
                        <td>1,4MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.309-0.0.1.310.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.309-0.0.1.310</td>
                    </tr>
                    <tr>
                        <td>Patch 308-309</td>
                        <td>1,59MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.308-0.0.1.309.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.308-0.0.1.309</td>
                    </tr>
                    <tr>
                        <td>Patch 307-308</td>
                        <td>3,78MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.307-0.0.1.308.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.307-0.0.1.308</td>
                    </tr>
                    <tr>
                        <td>Patch 306-307</td>
                        <td>17,1MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.306-0.0.1.307.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.306-0.0.1.307</td>
                    </tr>
                    <tr>
                        <td>Patch 305-306</td>
                        <td>20,5KB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.305-0.0.1.306.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.305-0.0.1.306</td>
                    </tr>
                    <tr>
                        <td>Patch 304-305</td>
                        <td>1,21MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.304-0.0.1.305.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.304-0.0.1.305</td>
                    </tr>
                    <tr>
                        <td>Patch 303-304</td>
                        <td>616KB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.303-0.0.1.304.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.303-0.0.1.304</td>
                    </tr>
                    <tr>
                        <td>Patch 302-303</td>
                        <td>48,6MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.302-0.0.1.303.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.302-0.0.1.303</td>
                    </tr>
                    <tr>
                        <td>Patch 301-302</td>
                        <td>1,19MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.301-0.0.1.302.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.301-0.0.1.302</td>
                    </tr>
                    <tr>
                        <td>Patch 300-301</td>
                        <td>16,4MB</td>
                        <td>
                            <a href="https://cuuam.gsscdn.com//Patch/jyzj-0.0.1.300-0.0.1.301.patch">HTTP liên
                                kết</a>
                        </td>
                        <td>0.0.1.300-0.0.1.301</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="block guide hide">
            <h1>Hướng dẫn cài đặt</h1>
            <p class="btn">
                <a class="_g1" href="https://trutien.vn/home/cuu-am-bao-dien/tan-thu/co-ban/tai-va-cai-dat-game.html"
                    title="Tải và Cài Đặt"></a>
                <a class="_g2"
                    href="https://diendan.gosu.vn/threads/53831-tong-hop-ban-patch-amp-cai-dat-cap-nhat-cuu-am-chan-kinh"
                    title="Cập Nhật Phiên Bản"></a>
                <a class="_g3" href="https://diendan.gosu.vn/threads/76221-tong-hop-cac-loi-thuong-gap"
                    title="Gỡ Cài Đặt"></a>
            </p>
        </div>

        <div class="block system hide">
            <h1>Cấu hình yêu cầu</h1>

            <table>
                <thead>
                    <tr>
                        <th>Cấu hình</th>
                        <th>Thấp</th>
                        <th>Trung bình</th>
                        <th>Cao</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Hệ điều hành</td>
                        <td>Windows XP SP3 trở lên</td>
                        <td colspan="2">Windows 7/8/10</td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td>Intel Core 2 Duo</td>
                        <td>Intel Core I3</td>
                        <td>Intel Core I5 hoặc Xeon trở lên</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>2 GB</td>
                        <td>4 GB</td>
                        <td>8 GB trở lên</td>
                    </tr>
                    <tr>
                        <td>Card màn hình</td>
                        <td>GT710 1GB trở lên</td>
                        <td>GTX750ti 2GB trở lên</td>
                        <td>GTX950 2GB trở lên</td>
                    </tr>
                    <tr>
                        <td>Card âm thanh</td>
                        <td>Card tương thích DirectX 9.0c</td>
                        <td colspan="2">Card tương thích DirectX 9.0c hoặc cao hơn</td>
                    </tr>
                    <tr>
                        <td>Ổ cứng</td>
                        <td colspan="3">Hơn 20G</td>
                    </tr>
                    <tr>
                        <td>Internet</td>
                        <td colspan="3">ADSL/FTTH</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection