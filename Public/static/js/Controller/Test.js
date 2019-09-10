var Controller_Test = {

    questCount: 0,

    /**
     * инициализация для страницы тест
     */
    init: function () {
        var self = this;
        self.questCount = $('#questCount').val();
        $('.js-quest').on('click', '.js-ansverSend', function () {
            var page = $(this).closest('.js-quest')[0],
                pageid = $(page).find('.js-questId').val();
            if (pageid < (questCount-1)) {
                self.togleHidden($(page).find('.js-questId').val());
            } else {
                var $data = $('form').serializeArray();
                self.submitAnswers($data);
            }
        });
    },

    /**
     * переключение элемента
     * @param $id
     */
    togleHidden: function ($id) {
        $('#quest[' + $id + ']').addClass('hidden');
        $('#quest[' + ($id+1) + ']').removeClass('hidden');
    },

    /**
     * отправка ответа
     * @param $data
     */
    submitAnswers: function ($data) {
        console.log($data);
        jQuery.ajax({
            type: "POST",
            url: window.location.href,
            data: $data,
            success:
            function (result) {
                console.log(result);
                $('#result').html(result);
            }
        })
    }
};