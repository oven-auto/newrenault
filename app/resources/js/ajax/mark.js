$(document).ready(function() {

	var area = $('.marks-block')
	var modal = $('#mainModal')

	$(document).on('click', '#mark-modal-toggle', function() {
        var parameters = {'brand_id' : $(this).closest('form').find('[name="brand_id"]').val()}
		var url = $(this).attr('data-url')

		if(!parameters.length)
		{
			alert('Не выбран бренд')
			return
		}

		getInModal(url, parameters, modal )
	})

	$(document).on('click', '.modal-body .item-mark', function() {
		var me = $(this)
		var markId = me.find('input').val()

		if(area.find('[data-id="'+markId+'"]').length > 0)
			area.find('[data-id="'+markId+'"]').closest('.item-mark').remove()
		else
			area.append(me.clone())
	})
})
