<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>로그인 페이지</title>
<script src="./sha/core.min.js"></script>
<script src="./sha/sha256.min.js"></script>
<?php   include "./head.inc"; ?>
</head>
<body>
<?php   include "./header.inc"; ?>
    <div id="wrap">
        <div id="content" style="padding: 20px 0 0">
            <div class="main_wrap">
                <div class="block">
                    <section>
                        <article class="user_info">
                            <dl>
                                <?php
                                    if(!isset($_SESSION["name"])){
                                    session_start();
                                ?>
                                <dd>
                                    <h3 class="username"><i class="fas fa-user" style="font-size:20px; margin-right:5px"></i><span><?php echo $_SESSION["name"] ?></span> 님</h3>
                                </dd>
                                <dd><b><i class="fas fa-hammer"></i>안전작업 허가신청</b> 100 건</dd>
                                <dd>
                                    <!--<button onclick="window.location.href='/userInfo.do'">정보수정</button> -->
                                    <button onclick="window.location.href='/registOTP.do'">OTP 등록</button>
                                    <button onclick="window.location.href='/logout.do'">로그아웃</button>
                                </dd>
                                <?php
                                    } else {
                                ?>
                                    <button class="btn btnlogin" onclick="window.location.href='/loginView.do'">로그인</button>
                                <?php
                                    }
                                ?>
                            </dl>
                        </article>
                        <%-- <article  style="height:682px; width:200px; overflow-y:auto">
							<div class="board_title">
								<h3>카테고리</h3><a class="more" href="">+</a>
								</div>
									<%@ include file="../include/navbar.jsp" %>
                        </article> --%>
                        <article style="height:682px; overflow-y:auto">
                            <div class="board_title">
                                <h3>카테고리</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <div id="browser" class="filetree treeview">
                                <ul>
                                    <li class="closed expandable" id="1">
                                        <div class="hitarea closed-hitarea expandable-hitarea"></div>
                                        <span class="folder"><a title="화성사업장" href="index.html?cidx=537" class="">화성사업장</a></span>
                                        <ul style="display: none;">
                                            <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.html?cidx=698">1구역</a></span></li>
                                            <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.html?cidx=699">2구역</a></span></li>
                                            <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.html?cidx=700">3구역</a></span></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable" id="110">
                                        <div class="hitarea closed-hitarea expandable-hitarea"></div>
                                        <span class="folder"><a title="아산사업장" href="index.html?cidx=697" class="">아산사업장</a></span>
                                        <ul style="display: none;">
                                            <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.html?cidx=698">1구역</a></span></li>
                                            <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.html?cidx=699">2구역</a></span></li>
                                            <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.html?cidx=700">3구역</a></span></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable" id="300">
                                        <div class="hitarea closed-hitarea expandable-hitarea"></div>
                                        <span class="folder"><a title="사외조립장" href="index.html?cidx=703" class="">사외조립장</a></span>
                                        <ul style="display: none;">
                                            <li class="closed" id="117"><span class="folder"><a title="A동" href="index.html?cidx=704">A동</a></span></li>
                                            <li class="closed" id="118"><span class="folder"><a title="B동" href="index.html?cidx=705">B동</a></span></li>
                                            <li class="closed" id="119"><span class="folder"><a title="C동" href="index.html?cidx=706">C동</a></span></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable" id="400">
                                        <div class="hitarea closed-hitarea expandable-hitarea"></div>
                                        <span class="folder"><a title="국내현장" href="index.html?cidx=703" class="">국내현장</a></span>
                                        <ul style="display: none;">
                                            <li class="closed" id="117"><span class="folder"><a title="A동" href="index.html?cidx=704">A동</a></span></li>
                                            <li class="closed" id="118"><span class="folder"><a title="B동" href="index.html?cidx=705">B동</a></span></li>
                                            <li class="closed" id="119"><span class="folder"><a title="C동" href="index.html?cidx=706">C동</a></span></li>
                                        </ul>
                                    </li>
                                    <li class="closed expandable lastExpandable" id="116">
                                        <div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div>
                                        <span class="folder"><a title="해외현장" href="index.html?cidx=703" class="">해외현장</a></span>
                                        <ul style="display: none;">
                                            <li class="closed" id="117"><span class="folder"><a title="A동" href="index.html?cidx=704">A동</a></span></li>
                                            <li class="closed" id="118"><span class="folder"><a title="B동" href="index.html?cidx=705">B동</a></span></li>
                                            <li class="closed" id="119"><span class="folder"><a title="C동" href="index.html?cidx=706">C동</a></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </section>
                    <section>
                        <article>
                            <div class="board_title">
                                <h3>사고재해 발생현황</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <h1 class="accident good">
                                무사고 <span>150</span> 일
                            </h1>
                        </article>

                        <article>
                            <div class="board_title">
                                <h3>위험성평가</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <div class="ft_left" style="width:45%">
                                <div id="piepro" style="width: 170px; height: 170px; position:relative; margin:0 auto 10px; padding-top:5px; "></div>
                                <center><b>위험성평가</b></center>
                                <script>
                                    var bar = new ProgressBar.Circle('#piepro', {
                                        color: '#aaa',
                                        // This has to be the same size as the maximum width to
                                        // prevent clipping
                                        strokeWidth: 20,
                                        trailWidth: 20,
                                        easing: 'easeInOut',
                                        duration: 0,
                                        text: {
                                            autoStyleContainer: false
                                        },
                                        from: {
                                            color: '#aaa',
                                            width: 20
                                        },
                                        to: {
                                            color: '#4d5894',
                                            width: 20
                                        },
                                        // Set default step function for all animate calls
                                        step: function(state, circle) {
                                            circle.path.setAttribute('stroke', state.color);
                                            circle.path.setAttribute('stroke-width', state.width);
                                            var value = Math.round(circle.value() * 100) + "%";
                                            if (value === 0) {
                                                circle.setText('');
                                            } else {
                                                circle.setText(value);
                                            }
                                        }
                                    });
                                    //	bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                                    bar.text.style.fontSize = '1.5rem';
                                    bar.text.style.margin = '5px 0 0 0';
                                    bar.animate(0.75); // Number from 0.0 to 1.0
                                </script>
                            </div>
                            <div class="ft_right" style="width:50%; margin-top:10px;">
                                <h4>안전 위험성평가 진행율</h4>
                                <table class="online_table">
                                    <colgroup>
                                        <col style="width:40%">
                                        <col style="width:30%">
                                        <col style="width:30%">
                                    </colgroup>
                                    <tr>
                                        <td>안전 1팀</td>
                                        <td align="center">25%</td>
                                        <td align="center">D + 10</td>
                                    </tr>
                                    <tr>
                                        <td>안전 2팀</td>
                                        <td align="center">95%</td>
                                        <td align="center">D + 52</td>
                                    </tr>
                                    <tr>
                                        <td>안전 3팀</td>
                                        <td align="center">50%</td>
                                        <td align="center">D + 30</td>
                                    </tr>
                                    <tr>
                                        <td>안전 4팀</td>
                                        <td align="center">10%</td>
                                        <td align="center">D + 5</td>
                                    </tr>
                                </table>
                            </div>
                        </article>
                        <article>
                            <div class="board_title">
                                <h3>공지사항</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <ul class="notice" style="height:253px">
                                <li>
                                    <a href="">
                                        <p>2022년도 안전관리등급제 심사결과</p>
                                        <span>2021-09-13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>2021년도 안전관리등급제 심사결과</p>
                                        <span>2021-09-13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>2020년도 안전관리등급제 심사결과</p>
                                        <span>2021-09-13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>2019년도 안전관리등급제 심사결과</p>
                                        <span>2021-09-13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>증명서 발급 방법 (증명서 발급신청서 포함)</p>
                                        <span>2021-09-10</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>비대면 멘토링 K-REM 프로그램 신청</p>
                                        <span>2021-09-10</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>[서울기술연구원] 도시문제 해결을 위한 크라우드 소싱</p>
                                        <span>2021-09-13</span>
                                    </a>
                                </li>
                            </ul>
                        </article>
                    </section>
                    <section>
                        <article>
                            <div class="board_title">
                                <h3>월간활동계획</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <div class="ft_left" style="width:calc(60% - 20px)">

                                <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var calendarEl = document.querySelector('div#calendar');
                                            var calendar = new FullCalendar.Calendar(calendarEl, {
                                                timeZone: 'UTC',
                                                initialView: 'dayGridMonth',
                                                businessHours: true,
                                                locale: 'ko',
                                                editable: false,
                                                selectable: true,
                                                dayMaxEvents: true, // allow "more" link when too many events
                                                fixedWeekCount: false,
                                                eventSources: [{
                                                    events: function(info, successCallback, failureCallBack) {
                                                        $.ajax({
                                                            url: '/actPlan/getMonthlyPlan.do',
                                                            type: 'post',
                                                            dataType: 'json',
                                                            success: function(data) {
                                                                console.log(data.items);
                                                                successCallback(data.items);
                                                            }
                                                        })
                                                    }
                                                }],
                                                eventClick: function(event) {
                                                    console.log(event);
                                                    var schedule_no = event.el.fcSeg.eventRange.def.publicId;

                                                    let form = document.createElement('form');

                                                    let obj;
                                                    obj = document.createElement('input');
                                                    obj.setAttribute('type', 'hidden');
                                                    obj.setAttribute('name', 'schedule_no');
                                                    obj.setAttribute('value', schedule_no);

                                                    form.appendChild(obj);
                                                    form.setAttribute('method', 'post');
                                                    form.setAttribute('action', '/actPlan/monthlyPlan.do');
                                                    document.body.appendChild(form);
                                                    form.submit();
                                                }
                                            });
                                            calendar.render();
                                        });
                                    </script>
                                </div>
                                <!--
							<p class="cal_label">
								<label class="cal_ok"></label >실시
								<label  class="cal_er"></label >문제점
								<label  class="cal_no"></label>미실시
							</p>
							-->
                            </div>
                            <div class="ft_right" style="width:40%">
                                <ul class="update_tab">
                                    <li onclick="tochn(&quot;today&quot;)" id="li_today" class="on"><a>오늘 일정</a></li>
                                    <li onclick="tochn(&quot;tomm&quot;)" id="li_tomm"><a>내일 일정</a></li>
                                </ul>
                                <ul class="cal_update">
                                    <li>
                                        <h3 id="daytoday">2022년 03월 30일 일정</h3>
                                        <section>
                                            <b>1분기 안전관리 정기점검</b>
                                            <p>1분기 안전관리 정기점검 보고, 회의</p>
                                        </section>
                                        <section>
                                            <b>2분기 안전관리 정기점검 계획</b>
                                            <p>2분기 안전관리 정기점검 계획수립, 예산 편성</p>
                                        </section>
                                        <section>
                                            <b>1분기 안전관리 정기점검</b>
                                            <p>1분기 안전관리 정기점검 보고, 회의</p>
                                        </section>
                                        <section>
                                            <b>2분기 안전관리 정기점검 계획</b>
                                            <p>2분기 안전관리 정기점검 계획수립, 예산 편성</p>
                                        </section>
                                    </li>
                                    <li style="display:none">
                                        <h3 id="daytomm">2022년 03월 31일 일정</h3>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article>
                            <div class="board_title">
                                <h3>안전점검 리스트</h3>
                                <a class="more" href="">+</a>
                            </div>
                            <table class="table_list" style="margin: 0; height:220px">
                                <tr>
                                    <th>No.</th>
                                    <th>점검장소</th>
                                    <th>점검일</th>
                                    <th>작성자</th>
                                    <th>점검상태</th>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>사옥1층</td>
                                    <td>2021-12-07</td>
                                    <td>관리자</td>
                                    <td><span class="list_ok">양호</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>사옥2층</td>
                                    <td>2021-12-07</td>
                                    <td>관리자</td>
                                    <td><span class="list_no">미흡</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>사옥3층</td>
                                    <td>2021-12-07</td>
                                    <td>관리자</td>
                                    <td><span class="list_ok">양호</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>사옥4층</td>
                                    <td>2021-12-07</td>
                                    <td>관리자</td>
                                    <td><span class="list_ok">양호</span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>사옥5층</td>
                                    <td>2021-12-07</td>
                                    <td>관리자</td>
                                    <td><span class="list_ok">양호</span></td>
                                </tr>
                            </table>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>