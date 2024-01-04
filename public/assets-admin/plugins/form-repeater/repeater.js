jQuery.fn.extend({
    createRepeater: function (options = {}) {
      var hasOption = function (optionKey) {
        return options.hasOwnProperty(optionKey);
      };
  
      var option = function (optionKey) {
        return options[optionKey];
      };
  
      var generateId = function (string) {
        return string
          .replace(/\[/g, '_')
          .replace(/\]/g, '')
          .toLowerCase();
      };
  
      var addItem = function (items, key) {
        var itemContent = items;
        var group = itemContent.data("group");
        var item = itemContent;
        var input = item.find('input,select,textarea');
  
        input.each(function (index, el) {
          var attrName = $(el).data('name');
          var skipName = $(el).data('skip-name');
          if (skipName !== true) {
            var originalName = $(el).attr("name");
            if (originalName) {
              $(el).attr("name", originalName); // Menambahkan "_key" pada nama atribut
            }
          }
          $(el).attr('id', generateId($(el).attr('name')));
          $(el).parent().find('label').attr('for', generateId($(el).attr('name')));
        });
  
        var itemClone = items.clone();
  
        /* Handling remove btn */
        var removeButton = itemClone.find('.remove-btn');
  
        if (key === 0) {
          removeButton.attr('disabled', true);
        } else {
          removeButton.attr('disabled', false);
        }
  
        removeButton.attr('onclick', '$(this).parents(\'.items\').remove()');
  
        var newItem = $("<div class='items'>" + itemClone.html() + "</div>");
        newItem.attr('data-index', key);
  
        newItem.appendTo(repeater);
      };
  
      /* find elements */
      var repeater = this;
      var items = repeater.find(".items");
      var key = items.length; // Menggunakan panjang elemen items sebagai key awal
      var addButton = repeater.find('.repeater-add-btn');
  
      /* handle click and add items */
      addButton.on("click", function () {
        addItem($(items[0]), key);
        key++;
      });
    }
  });