<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>地址列表</title>
    <link href="css/base2.css" rel="stylesheet" >
    <link href="css/checkout.css" rel="stylesheet" >
</head>
<body class="checkout">
    <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-add" viewBox="0 0 32 32">
                <title>add2</title>
                <path class="path1" d="M15 17h-13.664c-0.554 0-1.002-0.446-1.002-1 0-0.552 0.452-1 1.002-1h13.664v-13.664c0-0.554 0.446-1.002 1-1.002 0.552 0 1 0.452 1 1.002v13.664h13.664c0.554 0 1.002 0.446 1.002 1 0 0.552-0.452 1-1.002 1h-13.664v13.664c0 0.554-0.446 1.002-1 1.002-0.552 0-1-0.452-1-1.002v-13.664z"></path>
            </symbol>
            <symbol id="icon-ok" viewBox="0 0 39 32">
                <title>ok</title>
                <path class="path1" d="M14.084 20.656l-7.845-9.282c-1.288-1.482-3.534-1.639-5.016-0.351s-1.639 3.534-0.351 5.016l10.697 12.306c1.451 1.669 4.057 1.623 5.448-0.096l18.168-22.456c1.235-1.527 0.999-3.765-0.528-5.001s-3.765-0.999-5.001 0.528l-15.573 19.337z"></path>
            </symbol>
            <symbol id="icon-edit" viewBox="0 0 32 32">
                <title>edit</title>
                <path class="path1" d="M25.599 11.292l-4.892-4.892 3.825-3.825 4.892 4.892-3.825 3.825zM4.732 23.308l3.959 3.959-5.939 1.98 1.98-5.939zM10.666 26.225l-4.892-4.892 13.425-13.425 4.892 4.892-13.425 13.425zM31.687 6.713l-6.4-6.4c-0.417-0.417-1.091-0.417-1.508 0l-20.267 20.267c-0.114 0.115-0.191 0.25-0.242 0.393-0.003 0.009-0.012 0.015-0.015 0.025l-3.2 9.6c-0.128 0.383-0.029 0.806 0.257 1.091 0.203 0.204 0.476 0.313 0.754 0.313 0.112 0 0.227-0.017 0.337-0.054l9.6-3.2c0.011-0.003 0.017-0.013 0.027-0.016 0.142-0.052 0.276-0.128 0.39-0.242l20.267-20.267c0.417-0.416 0.417-1.091 0-1.508v0z"></path>
            </symbol>
            <symbol id="icon-del" viewBox="0 0 26 32">
                <title>delete</title>
                <path class="path1" d="M17.723 28c0.543 0 0.984-0.448 0.984-1v-12c0-0.552-0.441-1-0.984-1s-0.985 0.448-0.985 1v12c0 0.552 0.441 1 0.985 1v0zM7.877 28c0.543 0 0.984-0.448 0.984-1v-12c0-0.552-0.441-1-0.984-1s-0.985 0.448-0.985 1v12c0 0.552 0.441 1 0.985 1v0zM12.8 28c0.543 0 0.985-0.448 0.985-1v-12c0-0.552-0.441-1-0.985-1s-0.984 0.448-0.984 1v12c0 0.552 0.441 1 0.984 1v0zM23.631 4h-5.908v-2c0-1.104-0.882-2-1.969-2h-5.908c-1.087 0-1.969 0.896-1.969 2v2h-5.908c-1.087 0-1.969 0.896-1.969 2v2c0 1.104 0.882 2 1.969 2v18c0 2.208 1.765 4 3.939 4h13.784c2.174 0 3.938-1.792 3.938-4v-18c1.087 0 1.969-0.896 1.969-2v-2c0-1.104-0.882-2-1.969-2v0zM9.846 3c0-0.552 0.441-1 0.984-1h3.938c0.544 0 0.985 0.448 0.985 1v1h-5.908v-1zM21.662 28c0 1.104-0.882 2-1.969 2h-13.784c-1.087 0-1.97-0.896-1.97-2v-18h17.723v18zM22.646 8h-19.692c-0.543 0-0.985-0.448-0.985-1s0.441-1 0.985-1h19.692c0.543 0 0.984 0.448 0.984 1s-0.441 1-0.984 1v0z"></path>
            </symbol>
            <symbol id="icon-clock" viewBox="0 0 32 32">
                <title>clock</title>
                <path class="path1" d="M29.333 16c0-7.364-5.97-13.333-13.333-13.333s-13.333 5.97-13.333 13.333c0 7.364 5.97 13.333 13.333 13.333s13.333-5.97 13.333-13.333v0 0 0 0 0 0zM0 16c0-8.837 7.163-16 16-16s16 7.163 16 16c0 8.837-7.163 16-16 16s-16-7.163-16-16zM14.667 14.667v1.333h2.667v-10.667h-2.667v9.333zM24 18.667h1.333v-2.667h-10.667v2.667h9.333z"></path>
            </symbol>
        </defs>
    </svg>

    <div class="container">
        <div class="checkout-addr">
            <!-- process step -->
            <div class="check-step">
                <ul>
                    <li class="cur">地址确认</li>
                    <li>查看订单</li>
                    <li>支付</li>
                    <li>订单确认</li>
                </ul>
            </div>

            <!-- address list -->
            <div class="checkout-title">
                <span>配送地址</span>
            </div>
            <div class="addr-list-wrap">
                <div class="addr-list">
                    <ul>
                        <li v-for="(item, index) in filterAddress" v-bind:class="{'check':index==currentIndex}" @click="currentIndex=index">
                            <dl>
                                <dt>{{item.userName}}</dt>
                                <dd class="address">{{item.streetName}}</dd>
                                <dd class="tel" v-text="item.tel"></dd>
                            </dl>
                            <div class="addr-opration addr-edit">
                                <a href="javascript:;" class="addr-edit-btn">
                                    <svg class="icon icon-edit"><use xlink:href="#icon-edit"></use></svg>
                                </a>
                            </div>
                            <div class="addr-opration addr-del">
                                <a href="javascript:;" class="addr-del-btn">
                                    <svg class="icon icon-del"><use xlink:href="#icon-del"></use></svg>
                                </a>
                            </div>
                            <div class="addr-opration addr-set-default" v-show="item.isDefault==0">
                            	
                                <a href="javascript:;" class="addr-set-default-btn" @click="setDefault(item.addressId)"><i>设为默认</i></a>
                            </div>
                            <div class="addr-opration addr-default" v-if="item.isDefault==1">默认地址</div>
                        </li>

                        <li class="addr-new">
                            <div class="add-new-inner">
                                <i class="icon-add">
                                    <svg class="icon icon-add"><use xlink:href="#icon-add"></use></svg>
                                </i>
                                <p>添加新地址</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="shipping-addr-more">
                    <a class="addr-more-btn up-down-btn" href="javascript:;" @click = "loadMore">
                        more
                        <i class="i-up-down">
                            <i class="i-up-down-l"></i>
                            <i class="i-up-down-r"></i>
                        </i>
                    </a>
                </div>
            </div>

            <!-- shipping method-->
            <div class="checkout-title">
                <span>配送方式</span>
            </div>
            <div class="shipping-method-wrap">
                <div class="shipping-method">
                    <ul>
                        <li>
                            <div class="name">标准配送</div>
                            <div class="price">Free</div>
                        </li>
                        <li>
                            <div class="name">高级配送</div>
                            <div class="price">180</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="next-btn-wrap">
                <a href="javascript:;" class="btn btn--red">下一步</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="lib/vue.js"></script>
    <script type="text/javascript" src="lib/vue-resource.js"></script>
	<script type="text/javascript">
		var vm = new Vue({
	  	el: '.container',
	  	data: {
	  		addressList:[],
	  		limitLength:3,
	  		currentIndex:0
	  	},
	  	mounted: function(){
	  		this.$nextTick(function () {
			    this.getAddressList();
			})
	  	},
	  	computed:{
	  		filterAddress:function(){
	  			return this.addressList.slice(0,this.limitLength);
	  		}
	  	},
	  	methods:{
	  		getAddressList: function(){
	  			var _this = this;
	  			this.$http.get("address_show.php").then((res) => {
//	  				_this.productList = res.body;  //同data
					_this.addressList = res.data;
	  				console.log(_this.addressList[0]);
	  			});
	  		},
	  		loadMore: function(){
	  			if(this.limitLength == 3){
	  				this.limitLength = this.addressList.length;
	  			}else{
	  				this.limitLength = 3;
	  			}

	  		},
	  		setDefault: function(addressId){
	  			
	  			var _this = this;
	  			this.$http.get("admin/address_modify_handle.php?addressId="+addressId).then((res) => {
//	  				_this.productList = res.body;  //同data
					_this.addressList.forEach(function(address, index){
		  				if(address.addressId == addressId){
		  					address.isDefault = 1;
		  				}else{
		  					address.isDefault = 0;
		  				}
		  				
		  			});
	  			})
	  		}
	  	}
	});
	</script>
</body>
</html>