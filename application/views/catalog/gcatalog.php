<div class="gapper"></div>

<div class="container">
  <div class="my-3 text-primary">
    <h3><?=$category[0]['c_name']; ?></h3>
  </div>
  <div class="my-3">
    <div class="row">
      <?php foreach ($lcategory as $item): ?>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 p-2 mx-auto">
          <div class="mx-auto">
            <a href="/catalog/<?=$item['eng_name']; ?>">
              <div class="card m-auto border-0 shadow-sm p-1 mb-5 bg-white rounded">
                <div class="mx-auto">
                  <div class="mx-auto" style="width: 120px; height: 120px;">
                    <img src="/public/media/uploads/<?=$item['lc_image']; ?>" class="mx-auto" alt="">
                  </div>
                  <div class="card-body text-center">
                    <h6 class="card-title"><?=$item['lc_name']; ?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
