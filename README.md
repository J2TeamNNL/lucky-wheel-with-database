# J2Team Community Offline Luckywheel

I fix this luckywheel for J2Team Community Offline event from the original [HellCatVN](https://github.com/HellCatVN/lucky-wheel)

### Usage

Import database, go to admin/index.php to manage prizes 

### Config

Change database name in admin/connect.php

### Mode Config

```js
Line 36:
let nullable = 0 // For display only prizes have amount > 0
let nullable = 1 // For display only prizes have amount >= 0
```

```js
Line 57:
mode : both // For display both image and text
mode : null // For display text if only text and image if having it will having no text
```

### Return message

Using sweetalert 2 library

End:
```js
Line 63:
Swal.fire(
  'Chương trình kết thúc',
  'Đã hết phần thưởng',
  'error'
)
```

Success:
```js
Line 70:
Swal.fire({
  title: '<strong>Đã trúng giải</strong>',
  html:`<h1>${data}</h1>`,
  showCancelButton: true,
  confirmButtonText:'<i class="fa fa-thumbs-up"></i> Nhận giải!',
  cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
  backdrop: false
}).then((result) => {
  if (result.isConfirmed) {
    decreAmount();
  } 
})
```
