// アコーディオン機能
function toggleAccordion(index) {
    const content = document.getElementById('content-' + index);
    const icon = document.getElementById('icon-' + index);
    
    if (content.classList.contains('active')) {
        // アコーディオンを閉じる
        content.classList.remove('active');
        icon.style.transform = 'rotate(0deg)';
        icon.textContent = '＋';
    } else {
        // アコーディオンを開く
        content.classList.add('active');
        icon.style.transform = 'rotate(180deg)';
        icon.textContent = '－';
    }
}

// スライドショー機能
function showSlide(slideContainer, index) {
    const slides = slideContainer.querySelectorAll('.slide');
    const totalSlides = slides.length;
    
    if (totalSlides === 0) return;
    
    // 現在のスライドインデックスを取得または初期化
    if (!slideContainer.currentSlideIndex) {
        slideContainer.currentSlideIndex = 0;
    }
    
    // インデックスの範囲チェック
    if (index >= totalSlides) {
        slideContainer.currentSlideIndex = 0;
    } else if (index < 0) {
        slideContainer.currentSlideIndex = totalSlides - 1;
    } else {
        slideContainer.currentSlideIndex = index;
    }
    
    // 全ての画像を非表示にする
    slides.forEach(slide => {
        slide.style.display = 'none';
    });
    
    // 現在の画像を表示
    slides[slideContainer.currentSlideIndex].style.display = 'block';
    
    // スライド番号を更新
    const slideNumber = slideContainer.querySelector('.slide-number');
    if (slideNumber) {
        slideNumber.textContent = `${slideContainer.currentSlideIndex + 1} / ${totalSlides}`;
    }
}

function nextSlide(slideContainer) {
    showSlide(slideContainer, slideContainer.currentSlideIndex + 1);
}

function prevSlide(slideContainer) {
    showSlide(slideContainer, slideContainer.currentSlideIndex - 1);
}

function initializeSlideshow(slideContainer) {
    const slides = slideContainer.querySelectorAll('.slide');
    if (slides.length > 0) {
        slideContainer.currentSlideIndex = 0;
        showSlide(slideContainer, 0);
        
        // ナビゲーションボタンのイベントリスナーを設定
        const prevBtn = slideContainer.querySelector('.prev');
        const nextBtn = slideContainer.querySelector('.next');
        
        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                prevSlide(slideContainer);
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                nextSlide(slideContainer);
            });
        }
        
        // キーボードナビゲーション（オプション）
        slideContainer.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide(slideContainer);
            } else if (e.key === 'ArrowRight') {
                nextSlide(slideContainer);
            }
        });
        
        // フォーカス可能にする
        slideContainer.setAttribute('tabindex', '0');
    }
}

// 複数のスライドショーを初期化
function initializeAllSlideshows() {
    const slideshows = document.querySelectorAll('.slideshow-container');
    slideshows.forEach(slideshow => {
        initializeSlideshow(slideshow);
    });
}

// ページ読み込み時の初期化
document.addEventListener('DOMContentLoaded', function() {
    // アコーディオンの初期化
    const contents = document.querySelectorAll('.want-goods-content');
    contents.forEach(content => {
        content.classList.remove('active');
    });
    
    const icons = document.querySelectorAll('.accordion-icon');
    icons.forEach(icon => {
        icon.style.transform = 'rotate(0deg)';
        icon.textContent = '＋';
    });
    
    // スライドショーの初期化
    initializeAllSlideshows();
});
