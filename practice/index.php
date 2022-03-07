<?php
include('header.html');
?>
<section class="jumbotron text-center" id="Home">
  <img src="img/Picture2.jpg" alt="ahmad fikri husaini" width="200" class="rounded-circle img-thumbnail">
  <h1 class="display-4"><b>Ahmad Fikri Husaini</b></h1>
  <p class="lead">Mahasiswa S1 Pendidikan Teknologi Informasi 2020</p>
  <p class="lead"><b>Universitas Negeri Surabaya</b></p>
  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#profile"><i class="bi bi-person"></i> Detail</button>
  <div class="modal fade" id="profile">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ahmad Fikri Husaini</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body text-start">
          <p><b>Tanggal Lahir :</b></p>
          <p>11 Juni 2001</p>
          <p><b>Usia :</b></p>
          <p>20 Tahun</p>
          <p><b>Asal :</b></p>
          <p>Tuban</p>
          <p><b>Kewarganegaraan :</b></p>
          <p>Indonesia</p>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,138.7C274.3,139,343,117,411,144C480,171,549,245,617,240C685.7,235,754,149,823,101.3C891.4,53,960,43,1029,85.3C1097.1,128,1166,224,1234,245.3C1302.9,267,1371,213,1406,186.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
  </svg>
</section>
<section id="About">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-4">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-4">
        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus blanditiis similique iure. Libero minus quod, totam sint natus labore quibusdam exercitationem neque accusamus, commodi dolores harum laboriosam dolore adipisci officiis. Quod voluptate odio non quas eum, quo possimus. Corporis, inventore veniam non explicabo a aspernatur?</P>
      </div>
      <div class="col-md-4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, commodi? Cum expedita similique sunt eos deserunt commodi corrupti aspernatur. Unde, incidunt aut necessitatibus nihil id dolor commodi recusandae molestiae accusamus nesciunt veniam quaerat ut quibusdam iure tempore aspernatur temporibus ab.</p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f3f4f5" fill-opacity="1" d="M0,96L34.3,85.3C68.6,75,137,53,206,48C274.3,43,343,53,411,90.7C480,128,549,192,617,218.7C685.7,245,754,235,823,197.3C891.4,160,960,96,1029,90.7C1097.1,85,1166,139,1234,154.7C1302.9,171,1371,149,1406,138.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
  </svg>
</section>
<section class="sec1" id="Carousel">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-3">
        <h2>Carousel</h2>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/pic1.jpg" class="d-block w-100" alt="pic1">
            </div>
            <div class="carousel-item">
              <img src="img/pic2.jpg" class="d-block w-100" alt="pic2">
            </div>
            <div class="carousel-item">
              <img src="img/pic3.jpg" class="d-block w-100" alt="pic3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <blockquote class="blockquote my-5">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut in veniam accusamus, fugit consequuntur consectetur.</p>
          <footer class="blockquote-footer">From Lorem</footer>
        </blockquote>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,154.7C240,149,300,139,360,117.3C420,96,480,64,540,48C600,32,660,32,720,53.3C780,75,840,117,900,117.3C960,117,1020,75,1080,64C1140,53,1200,75,1260,85.3C1320,96,1380,96,1410,96L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
  </svg>
</section>
<section id="Card">
  <div class="container">
    <div class="row">
      <div class="col mb-3 text-center">
        <h2>cards</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 pb-2">
          <div class="card">
            <img class="card-img-top" src="img/serly.jpeg" alt="alet">
            <div class="card-body">
              <h4 class="card-title">Serly Ardila</h4>
              <p class="card-text">S1 Pendidikan Teknologi Informasi</p>
              <a class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="klik untuk melihat detail">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <img class="card-img-top" src="img/ayu.jpg" alt="ayu">
            <div class="card-body">
              <h4 class="card-title">Seftiani Ayu Lestari</h4>
              <p class="card-text">S1 Pendidikan Teknologi Informasi</p>
              <a class="btn btn-primary" data-bs-toggle="popover" title="pemberitahuan!" data-bs-content="maaf fitur ini sedang dalam pengembangan">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 pb-2">
          <div class="card">
            <img class="card-img-top" src="img/dito.jpg" alt="dito">
            <div class="card-body">
              <h4 class="card-title">Dito Arya Saputra</h4>
              <p class="card-text">S1 Pendidikan Teknologi Informasi</p>
              <a class="btn btn-primary">Detail</a>
              <div class="alert alert-warning alert-dismissible mt-2">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <b>Perhatian!</b> Fitur masih dalam maintenance.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f3f4f5" fill-opacity="1" d="M0,224L48,234.7C96,245,192,267,288,245.3C384,224,480,160,576,160C672,160,768,224,864,208C960,192,1056,96,1152,85.3C1248,75,1344,149,1392,186.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</section>
<section id="Tables" class="sec1 mb-3">
  <div class="row text-center">
    <div class="col">
      <h2>Tables</h2>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <div class="container">
        <table id="kelas" class="table table-light table-bordered table-responsive table-hover">
          <thead class="text-center">
            <tr>
              <th>Nama Lengkap</th>
              <th>Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ahmad Fikri Husaini</td>
              <td>PTI 2020 B</td>
              <td class="text-center"><a href="" class="btn btn-success mx-1"><i class="bi bi-pencil"></i></a> <a href="" class="mx-1 btn btn bg-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
            <tr>
              <td>Dito Arya Saputra</td>
              <td>PTI 2020 B</td>
              <td class="text-center"><a href="" class="btn btn-success mx-1"><i class="bi bi-pencil"></i></a> <a href="" class="mx-1 btn btn bg-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
            <tr>
              <td>Seftiani Ayu Lestari</td>
              <td>PTI 2020 B</td>
              <td class="text-center"><a href="" class="btn btn-success mx-1"><i class="bi bi-pencil"></i></a> <a href="" class="mx-1 btn btn bg-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
            <tr>
              <td>Serly Ardila</td>
              <td>PTI 2020 B</td>
              <td class="text-center"><a href="" class="btn btn-success mx-1"><i class="bi bi-pencil"></i></a> <a href="" class="mx-1 btn btn bg-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col"></div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,240C384,277,480,299,576,272C672,245,768,171,864,154.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</section>
<section>
  <div class="row text-center">
    <div class="m-5 col text-secondary">
      <h1>"Sedikit berbeda lebih baik daripada sedikit lebih baik"</h1>
      <p><b>Panji Pragiwaksono</b></p>
    </div>
  </div>
</section>
<div class="progress fixed-bottom">
  <div id="bar" class="progress-bar bg-info" style="width:0%"></div>
</div>
<?php
include('footer.html');
?>