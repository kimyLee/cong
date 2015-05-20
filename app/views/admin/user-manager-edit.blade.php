@extends('layouts.master')

@section('title')
    <title>丛丛网－用户管理</title>
@stop

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/dist/css/admin/user-manager-edit.css">
@stop

@section('body')
	@parent
	<div id="main">
            @include('components.task-banner')
       	@include('components.adminheader')

	<div class="base-content tradingCenter-content">
		<h3>详细信息/修改</h3>
		<hr />		
		<div class="content-main">	
			
			<div class="content-row">
				<label class="label">客户当前头像：</label>
                <div class="content-input" id="avatar-wrapper">
                    <div class="content-img">
                        <input type="hidden" id="avatar" value=""  readonly="readonly"/>
                        <input type="hidden" id="avatar" value=""  readonly="readonly"/>
                        <img src="" alt="avatar" class="person-img" id="avatarImg" />
                    </div>
                   
                </div>

            </div>
            <div class="content-row">
                <label class="label">真实姓名：</label>
                <div class="content-input">
                    <input type="text" id="realname" name="realname" value="" readonly="readonly" />
                </div>
            </div>
            <div class="content-row">
                <label class="label">性别:</label>
                <div class="content-input sex">
                   
                        <input name="sex" type="radio" checked="checked" id="male" value="" readonly="readonly"/> <label for="male" style="padding-right: 35px;">男</label>
                        <input name="sex" type="radio" id="female"  value="" readonly="readonly"/> <label for="female">女</label>
                 
                       
                  
                </div>
            </div>
            <div class="content-row">
                <label class="label">生日:</label>
                <div class="content-input">
                    <input type="text" name="year" id="year" maxlength="4" value="" readonly="readonly"/><span class="text"> 年</span>
                    <input type="text" name="month" id="month" maxlength="2" value="" readonly="readonly"/><span class="text"> 月</span>
                    <input type="text" name="day" id="day"  maxlength="2" value=""  readonly="readonly"/><span class="text"> 日</span>
                </div>
            </div>
            <div class="content-row">
                <label class="label" for="wechat">微信：</label>
                <div class="content-input">
                    <input type="text" id="wechat" name="wechat" value=""  readonly="readonly"/>
                </div>
            </div>
            <div class="content-row">
                <label class="label" for="QQ">QQ：</label>
                <div class="content-input">
                    <input type="text" id="QQ" name="QQ" value="" readonly="readonly"/>
                </div>
            </div>
            <div class="content-row">
                <label class="label" for="prov">所在地：</label>
                <div class="content-input">
                    <input type="text" id="prov" name="prov" value="" readonly="readonly"/> 省
                    <input type="text" id="city" name="city" value="" readonly="readonly"/> 市
                    <input type="text" id="region" name="region" value="" readonly="readonly"/> 区
                    <!-- <input type="button" value="其他" id="other-region-btn" /> -->
                </div>
            </div>
            <div class="content-row">
                <label class="label" for="address">详细地址：</label>
                <div class="content-input">
                    <input type="text" id="address" name="address" value="" readonly="readonly"/>
                </div>
            </div>
            <div class="content-row">
                <a href="user-manager" class="btn" id="base-info-save-btn">批准</a>
                <a href="user-manager" class="btn">打回</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="user-manager" class="btn">返回上一步</a>

            </div>
		</div>	
	</div>
 <div class="clear"></div>
</div>
@stop

@section('js')
	@parent
	<script type="text/javascript" src="/lib/js/qiniu/qiniu.min.js"></script> 
    <script type="text/javascript" src="/lib/js/plupload/plupload.full.min.js"></script>
	<script type="text/javascript" src='/dist/js/pages/user-manager-edit.js'></script>
@stop