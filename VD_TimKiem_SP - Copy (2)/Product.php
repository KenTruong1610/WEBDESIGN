<?php
// Polymorphism: Interface định nghĩa hành vi chung
interface ProductInterface {
    public function displayCard();
    public function displayDetail();
}

// Abstraction: Abstract class cho sản phẩm
abstract class AbstractProduct implements ProductInterface {
    protected $id;
    protected $name;
    protected $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
    // Encapsulation: Getter methods
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }
    
    public function getFormattedPrice() {
        return number_format($this->price, 0, ',', '.').' ₫';
    }
    
    // Polymorphism: Phương thức abstract sẽ được triển khai khác nhau
    abstract public function displayCard();
    abstract public function displayDetail();
}

// Inheritance: Product kế thừa từ AbstractProduct
class Product extends AbstractProduct {
    protected $imageUrl;
    protected $detail;
    
    public function __construct($id, $name, $price, $imageUrl, $detail = '') {
        parent::__construct($id, $name, $price);
        $this->imageUrl = $imageUrl;
        $this->detail = $detail;
    }
    
    // Encapsulation: Thêm getter
    public function getImageUrl() { return $this->imageUrl; }
    public function getDetail() { return $this->detail; }
    
    // Polymorphism: Triển khai phương thức
    public function displayCard() {
        return '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card product-card">
                <img src="'.$this->imageUrl.'" class="card-img-top product-img" alt="'.$this->name.'">
                <div class="card-body">
                    <h5 class="card-title">'.$this->name.'</h5>
                    <p class="card-text text-success fw-bold">'.$this->getFormattedPrice().'</p>
                    <a href="detail.php?sp='.$this->id.'" class="btn btn-primary w-100">
                        <i class="bi bi-eye"></i> Xem chi tiết
                    </a>
                </div>
            </div>
        </div>';
    }
    
    public function displayDetail() {
        return '
        <div class="col-md-6">
            <img src="'.$this->imageUrl.'" class="img-fluid product-detail-img" alt="'.$this->name.'">
        </div>
        <div class="col-md-6">
            <h2>'.$this->name.'</h2>
            <h4 class="text-danger my-3">'.$this->getFormattedPrice().'</h4>
            
            <div class="d-grid gap-2 d-md-block mb-4">
                <button class="btn btn-primary me-md-2" type="button">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                </button>
                <button class="btn btn-outline-primary" type="button">
                    <i class="bi bi-heart"></i> Yêu thích
                </button>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Thông tin chi tiết</h5>
                </div>
                <div class="card-body">
                    <p>'.$this->detail.'</p>
                </div>
            </div>
        </div>';
    }
}

// Inheritance: DigitalProduct kế thừa từ Product
class DigitalProduct extends Product {
    private $downloadLink;
    
    public function __construct($id, $name, $price, $imageUrl, $downloadLink, $detail = '') {
        parent::__construct($id, $name, $price, $imageUrl, $detail);
        $this->downloadLink = $downloadLink;
    }
    
    // Polymorphism: Ghi đè phương thức
    public function displayCard() {
        $baseCard = parent::displayCard();
        return str_replace(
            '</div>', 
            '<p class="text-muted small mt-2"><i class="bi bi-download"></i> Có sẵn bản digital</p></div>', 
            $baseCard
        );
    }
    
    public function displayDetail() {
        $baseDetail = parent::displayDetail();
        return str_replace(
            '</div>', 
            '<div class="mt-3"><a href="'.$this->downloadLink.'" class="btn btn-success"><i class="bi bi-download"></i> Tải xuống</a></div></div>', 
            $baseDetail
        );
    }
}