@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>point table</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Point Table Area Start -->
<div id="point-table-area" class="point-table-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Points Table -->
                <div class="table-responsive points-table">
                    <table class="table mb-0">
                        <tr>
                            <th>2016 / 2017</th>
                            <th>GP</th>
                            <th>W</th>
                            <th>D</th>
                            <th>L</th>
                            <th>F</th>
                            <th>PT</th>
                        </tr>
                        <tr>
                            <td>01. Abahani</td>
                            <td>25</td>
                            <td>21</td>
                            <td>2</td>
                            <td>2</td>
                            <td>52</td>
                            <td>48</td>
                        </tr>
                        <tr>
                            <td>02. Mohammedan</td>
                            <td>25</td>
                            <td>20</td>
                            <td>2</td>
                            <td>2</td>
                            <td>45</td>
                            <td>47</td>
                        </tr>
                        <tr>
                            <td>03. Arambagh KS</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>44</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>04. Brothers Union</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>40</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>05. Feni Soccer Club</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>40</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>06. Muktijoddha Sangsad</td>
                            <td>25</td>
                            <td>17</td>
                            <td>1</td>
                            <td>5</td>
                            <td>40</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>07. Sheikh Jamal</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>44</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>08. Sheikh Russel KC</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>40</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>09. Team BJMC</td>
                            <td>25</td>
                            <td>19</td>
                            <td>1</td>
                            <td>3</td>
                            <td>40</td>
                            <td>44</td>
                        </tr>
                        <tr>
                            <td>10. Dhaka Soccer Club</td>
                            <td>25</td>
                            <td>17</td>
                            <td>1</td>
                            <td>5</td>
                            <td>40</td>
                            <td>40</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Point Table Area End -->

@include('layouts.breakingnews')

@endsection
