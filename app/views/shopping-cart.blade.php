@extends('layouts.master')

@section('title')
    <title>丛丛网－购物车</title>
@stop
@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/dist/css/shopping-cart.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/checkbox/checkbox.css">
@stop

@section('body')
    @parent
    <div id="main">
        <div class="shopping-cart-content my-self-checkbox">
            <div class="banner">
                <p>我的购物车</p>
            </div>
            <div class="main-content">
                <div class="product-list">
                    <div class="list-banner">

                    </div>
                    <div class="one-list">
                        <div class="info">
                            <label class="my-self-checkbox-label">
                                <input type="checkbox" name="indent" value="order1" style="display:hidden;">
                            </label>
                            <span class="date">2014-12-24</span> 
                            <span class="product-name-title">商品名称</span>
                        </div>
                        <div class="detail">
                            <div class="img detail-component">
                                <img src="/images/tradingcenter/seller/rank.png" alt="rank" width="44" height="44" />
                            </div>
                            <div class="title detail-component">
                                <p>此处描述为产品的标题XXXXXXXXXXX</p>
                            </div>
                            <div class="price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="counter detail-component">
                                <label class="counter-btn">-</label>
                                <input type="text" value="1" class="counter-input">
                                <label class="counter-btn">+</label>
                            </div>
                            <div class="total-price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="status detail-component">
                                <p class="status-content">交易成功</p>
                                <p class="delete">删除</p>
                            </div>
                        </div>
                    </div>
                    <div class="one-list">
                        <div class="info">
                            <label class="my-self-checkbox-label">
                                <input type="checkbox" name="indent" value="order1" style="display:hidden;">
                            </label>
                            <span class="date">2014-12-24</span> 
                            <span class="product-name-title">商品名称</span>
                        </div>
                        <div class="detail">
                            <div class="img detail-component">
                                <img src="/images/tradingcenter/seller/rank.png" alt="rank" width="44" height="44" />
                            </div>
                            <div class="title detail-component">
                                <p>此处描述为产品的标题XXXXXXXXXXX</p>
                            </div>
                            <div class="price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="counter detail-component">
                                <label class="counter-btn">-</label>
                                <input type="text" value="1" class="counter-input">
                                <label class="counter-btn">+</label>
                            </div>
                            <div class="total-price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="status detail-component">
                                <p class="status-content">交易成功</p>
                                <p class="delete">删除</p>
                            </div>
                        </div>
                    </div>
                    <div class="one-list">
                        <div class="info">
                            <label class="my-self-checkbox-label">
                                <input type="checkbox" name="indent" value="order1" style="display:hidden;">
                            </label>
                            <span class="date">2014-12-24</span> 
                            <span class="product-name-title">商品名称</span>
                        </div>
                        <div class="detail">
                            <div class="img detail-component">
                                <img src="/images/tradingcenter/seller/rank.png" alt="rank" width="44" height="44" />
                            </div>
                            <div class="title detail-component">
                                <p>此处描述为产品的标题XXXXXXXXXXX</p>
                            </div>
                            <div class="price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="counter detail-component">
                                <label class="counter-btn">-</label>
                                <input type="text" value="1" class="counter-input">
                                <label class="counter-btn">+</label>
                            </div>
                            <div class="total-price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="status detail-component">
                                <p class="status-content">交易成功</p>
                                <p class="delete">删除</p>
                            </div>
                        </div>
                    </div>
                    <div class="one-list">
                        <div class="info">
                            <label class="my-self-checkbox-label">
                                <input type="checkbox" name="indent" value="order1" style="display:hidden;">
                            </label>
                            <span class="date">2014-12-24</span> 
                            <span class="product-name-title">商品名称</span>
                        </div>
                        <div class="detail">
                            <div class="img detail-component">
                                <img src="/images/tradingcenter/seller/rank.png" alt="rank" width="44" height="44" />
                            </div>
                            <div class="title detail-component">
                                <p>此处描述为产品的标题XXXXXXXXXXX</p>
                            </div>
                            <div class="price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="counter detail-component">
                                <label class="counter-btn">-</label>
                                <input type="text" value="1" class="counter-input">
                                <label class="counter-btn">+</label>
                            </div>
                            <div class="total-price detail-component">
                                <span class="money">￥<span>380</span></span>
                            </div>
                            <div class="status detail-component">
                                <p class="status-content">交易成功</p>
                                <p class="delete">删除</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearning">
                    <span class="product-number">已选商品 <span class="mark">4</span> 件</span>
                    <span class="total">共计 <span class="mark">￥1520</span></span>
                    <a href="" class="btn">立即结算</a>
                </div>

            </div>
        </div>
    </div>
@stop

@section('js')
    @parent
    <script type="text/javascript" src='/dist/js/pages/shopping-cart.js'></script>
@stop