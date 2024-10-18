
const player = new Plyr('.plyr', {
    controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen', 'settings'],
    settings: ['quality', 'speed', 'loop'],
    i18n: {
        restart: 'Phát lại',
        rewind: 'Tua về {seektime}s',
        play: 'Phát',
        pause: 'Tạm dừng',
        fastForward: 'Tua nhanh {seektime}s',
        seek: 'Xem',
        seekLabel: '{currentTime} of {duration}',
        currentTime: 'Thời gian hiện tại',
        duration: 'Thời lượng',
        volume: 'Âm lượng',
        mute: 'Tắt tiếng',
        unmute: 'Bỏ tắt tiếng',
        enableCaptions: 'Bật phụ đề',
        disableCaptions: 'Tắt phụ đề',
        download: 'Tải video',
        enterFullscreen: 'Toàn màn hình',
        exitFullscreen: 'Thu nhỏ màn hình',
        frameTitle: 'Phát video cho {title}',
        captions: 'Phụ đề',
        settings: 'Cài đặt',
        pip: 'Trình phát trong ảnh',
        menuBack: 'Về menu trước',
        speed: 'Tốc độ',
        normal: 'Bình thường',
        quality: 'Chất lượng',
        loop: 'Lặp lại',
        start: 'Bắt đầu',
        end: 'Kết thúc',
        all: 'Tất cả',
        reset: 'Reset',
        disabled: 'Tắt',
        enabled: 'Bật',
        advertisement: 'QC',
        qualityBadge: {
            2160: '4K',
            1440: 'HD',
            1080: 'HD',
            720: 'HD',
            576: 'SD',
            480: 'SD',
        },
    },
});