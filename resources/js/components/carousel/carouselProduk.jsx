import React, { useRef, useState } from "react";
import { Swiper, SwiperSlide } from "swiper/react";

import "swiper/css";
import "../../../css/carouselproduk.css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import img from "../../../../public/asset/produk/mockup-scarf-no-bg.png";

import { Navigation, Mousewheel, Keyboard } from "swiper/modules";

export default function CarouselProduk() {
    const [swiperRef, setSwiperRef] = useState(null);

    return (
        <>
            <Swiper
                onSwiper={setSwiperRef}
                slidesPerView={2.5}
                // cssMode={true}
                spaceBetween={25}
                mousewheel={true}
                navigation={true}
                modules={[Navigation, Keyboard]}
                allowTouchMove={true}
                breakpoints={{
                    375: {
                        slidesPerView: 1.8,
                    },
                    768: {
                        slidesPerView: 2.8,
                    },
                    1024: {
                        slidesPerView: 3.6,
                    },
                }}
                className="w-[85%] sm:w-[88%]  mySwiper  mx-auto mt-8 flex justify-center md:w-[82%]"
            >
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
                <SwiperSlide className="swiper-slide">
                    <div>
                        <img src={img} className="" alt="" />
                        <div className="swiper-title">
                            <p className="">Scarf</p>
                            <button>
                                <iconify-icon
                                    icon="wpf:like"
                                    widht="24"
                                    height="24"
                                ></iconify-icon>
                            </button>
                        </div>
                        <div className="swiper-detail-and-price">
                            <p>Voal Premium</p>
                            <span>IDR 140.000</span>
                        </div>
                    </div>
                </SwiperSlide>
            </Swiper>
        </>
    );
}
