Checkbox = require './../../../common/checkbox/checkbox.coffee'

checkbox = (new Checkbox({
    selector: '.checkbox-wrapper'
    data: ["acceptance", "finishConfirmed", "addPriceOrDelay", "publishSuccess", "publishFail", "nearDeadline"]
}))

setMessageConfig = (e)->
	data = 
		acceptance: 0,
		finishConfirmed: 0,
		addPriceOrDelay: 0, 
		publishSuccess: 0,
		publishFail: 0,
		nearDeadline: 0

	items = checkbox.getCheckedItem()

	for i in [0...items.length]
		item = items[i]
		if item.checked
			$item = $(item)
			name = $item.attr("name")
			data[name] = 1

	dataBus.setMessageConfig data, (res)->
		if res.errCode == 0
			alert "修改成功"
		else
			alert res.message

getMessageConfig = (checkbox)->	
	dataBus.getMessageConfig (res)->
		if res.errCode == 0
			checkedNames = []
			messageConfig = res.messageConfig
			for name, value of messageConfig
				if value 
					checkedNames.push name
			checkbox.setItemsCheckedByName checkedNames
		else
			console.log res.message

$ ->
	$("#confirm-btn").click setMessageConfig
	$("#reset-btn").click (e)->
		data = 
			acceptance: 0,
			finishConfirmed: 0,
			addPriceOrDelay: 0, 
			publishSuccess: 0,
			publishFail: 0,
			nearDeadline: 0

		dataBus.setMessageConfig data, (res)->
			if res.errCode == 0
				alert "修改成功"
				checkbox.resetAllItems()
			else
				alert res.message

	getMessageConfig(checkbox)

dataBus = 
	setMessageConfig: (data, callback)->
		$.post "/message/set-config", data, (data)->
			callback data

	getMessageConfig: (callback)->
		$.get "/message/get-config", {}, (data)->
			callback data


