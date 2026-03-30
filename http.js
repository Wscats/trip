'use strict';

//node.js 创建服务器需要用到http的模块
//创建服务器
const http = require('http');
//处理url
const url = require('url');
//处理字符串
const querystring = require('querystring');
//创建服务器
const app = http.createServer((request, response) => {
		//request 请求头
		//response 响应头
		//把url上带的参数，也就是键值对拿到这里处理
		console.log(url.parse(request.url).query);
		//url处理完后的结果
		const paramStr = url.parse(request.url).query;
		//就是把url拿下来的键值对转化成js可用的对象
		const param = querystring.parse(paramStr);
		console.log("name:" + param.name)
		console.log("callback:" + param.callback)
		const obj = {
			hotel: [{
				'main1': '酒店',
				'main2': '海外酒店',
				'main21': '特价酒店',
				'main3': '团购',
				'main31': '民宿·客栈',
				'switch': false
			}, {
				'main1': '酒店',
				'main2': '海外酒店',
				'main21': '特价酒店',
				'main3': '团购',
				'main31': '民宿·客栈',
				'switch': false
			}, {
				'main1': '酒店',
				'main2': '海外酒店',
				'main21': '特价酒店',
				'main3': '团购',
				'main31': '民宿·客栈',
				'switch': false
			}, {
				'main1': '酒店',
				'main2': '海外酒店',
				'main21': '特价酒店',
				'main3': '团购',
				'main31': '民宿·客栈',
				'switch': true
			}],
			name: param.name
		}

		//返回信息
		response.end(param.callback + "(" + JSON.stringify(obj) + ")")
	})
	//监听8888端口
app.listen(8888);
console.log("启动服务器")