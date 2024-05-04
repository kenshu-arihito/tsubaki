<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    const PRODUCTS = [
        ['name'=>'プリングルズ', 'category_id'=>3, 'price'=>214],
        ['name'=>'キシリッシュ', 'category_id'=>2, 'price'=>540],
        ['name'=>'カラムーチョ', 'category_id'=>3, 'price'=>243],
        ['name'=>'果汁グミ', 'category_id'=>2, 'price'=>148],
        ['name'=>'キットカット', 'category_id'=>1, 'price'=>356],
        ['name'=>'エンゼルパイ', 'category_id'=>1, 'price'=>98],
        ['name'=>'パピコ', 'category_id'=>4, 'price'=>160],
        ['name'=>'パイの実', 'category_id'=>1, 'price'=>370],
        ['name'=>'チューペット', 'category_id'=>4, 'price'=>108],
        ['name'=>'マーブルチョコレート', 'category_id'=>1, 'price'=>130],
        ['name'=>'コアラのマーチ', 'category_id'=>1, 'price'=>120],
        ['name'=>'モナ王', 'category_id'=>4, 'price'=>128],
        ['name'=>'ガリガリ君', 'category_id'=>4, 'price'=>80],
        ['name'=>'ベビースターラーメン', 'category_id'=>3, 'price'=>118],
        ['name'=>'うまい棒', 'category_id'=>3, 'price'=>12],
        ['name'=>'雪見だいふく', 'category_id'=>4, 'price'=>120],
        ['name'=>'たけのこの里', 'category_id'=>1, 'price'=>130],
        ['name'=>'博多通りもん', 'category_id'=>5, 'price'=>770],
        ['name'=>'フルーチェ', 'category_id'=>4, 'price'=>100],
        ['name'=>'ココアシガレット', 'category_id'=>2, 'price'=>40],
        ['name'=>'ぬれせんべい', 'category_id'=>6, 'price'=>274],
        ['name'=>'ヨーグル', 'category_id'=>7, 'price'=>20],
        ['name'=>'マカロン', 'category_id'=>7, 'price'=>300],
        ['name'=>'クールミントガム', 'category_id'=>2, 'price'=>130],
        ['name'=>'ねるねるねるね', 'category_id'=>7, 'price'=>95],
        ['name'=>'アイスの実', 'category_id'=>4, 'price'=>180],
        ['name'=>'SOYJOY', 'category_id'=>3, 'price'=>98],
        ['name'=>'クランキーチョコレート', 'category_id'=>1, 'price'=>151],
        ['name'=>'メントス', 'category_id'=>2, 'price'=>120],
        ['name'=>'イチゴ大福', 'category_id'=>7, 'price'=>150],
        ['name'=>'ミニコーラ', 'category_id'=>7, 'price'=>30],
        ['name'=>'キシリトールガム', 'category_id'=>2, 'price'=>111],
        ['name'=>'ふ菓子', 'category_id'=>3, 'price'=>30],
        ['name'=>'ウイダーinゼリー', 'category_id'=>4, 'price'=>324],
        ['name'=>'ルックチョコレート', 'category_id'=>1, 'price'=>117],
        ['name'=>'チョコエッグ', 'category_id'=>1, 'price'=>220],
        ['name'=>'FRISK', 'category_id'=>2, 'price'=>194],
        ['name'=>'チョコベビー', 'category_id'=>1, 'price'=>140],
        ['name'=>'プロテインバー', 'category_id'=>1, 'price'=>165],
        ['name'=>'ピザポテト', 'category_id'=>3, 'price'=>193],
        ['name'=>'BOX ICE', 'category_id'=>4, 'price'=>199],
        ['name'=>'アルフォート', 'category_id'=>1, 'price'=>108],
        ['name'=>'ヨックモック', 'category_id'=>5, 'price'=>1209],
        ['name'=>'pureグミ', 'category_id'=>2, 'price'=>138],
        ['name'=>'ぷっちょ', 'category_id'=>2, 'price'=>120],
        ['name'=>'パックンチョ', 'category_id'=>1, 'price'=>100],
        ['name'=>'ミレービスケット', 'category_id'=>5, 'price'=>810],
        ['name'=>'バームロール', 'category_id'=>1, 'price'=>173],
        ['name'=>'ふんわり名人', 'category_id'=>3, 'price'=>257],
        ['name'=>'ポテロング', 'category_id'=>3, 'price'=>167],
        ['name'=>'鳩サブレー', 'category_id'=>3, 'price'=>900],
        ['name'=>'キャベツ太郎', 'category_id'=>3, 'price'=>30],
        ['name'=>'アーモンドグリコ', 'category_id'=>2, 'price'=>171],
        ['name'=>'博多の女', 'category_id'=>7, 'price'=>1944],
        ['name'=>'ザクリッチ', 'category_id'=>4, 'price'=>160],
        ['name'=>'森永ミルクキャラメル', 'category_id'=>2, 'price'=>100],
        ['name'=>'m&m', 'category_id'=>1, 'price'=>130],
        ['name'=>'じゃがりこ', 'category_id'=>3, 'price'=>149],
        ['name'=>'チョコバット', 'category_id'=>1, 'price'=>220],
        ['name'=>'じゃがポックル', 'category_id'=>3, 'price'=>320],
        ['name'=>'サッポロポテト', 'category_id'=>3, 'price'=>130],
        ['name'=>'わさビーフ', 'category_id'=>3, 'price'=>140],
        ['name'=>'暴君ハバネロ', 'category_id'=>3, 'price'=>108],
        ['name'=>'ブラックサンダー', 'category_id'=>1, 'price'=>35],
        ['name'=>'チョコバリ', 'category_id'=>4, 'price'=>33],
        ['name'=>'チロルチョコ', 'category_id'=>1, 'price'=>23],
        ['name'=>'かっぱえびせん', 'category_id'=>3, 'price'=>60],
        ['name'=>'レディーボーデン', 'category_id'=>4, 'price'=>480],
        ['name'=>'ハッピーターン', 'category_id'=>3, 'price'=>280],
        ['name'=>'デスレイン', 'category_id'=>3, 'price'=>200],
        ['name'=>'ペペロ', 'category_id'=>1, 'price'=>227],
        ['name'=>'みだらしだんご', 'category_id'=>7, 'price'=>226],
        ['name'=>'Jリーグチップス', 'category_id'=>3, 'price'=>105],
        ['name'=>'焼きDARS', 'category_id'=>1, 'price'=>238],
        ['name'=>'キャラメルコーン', 'category_id'=>3, 'price'=>128],
        ['name'=>'カントリーマアム', 'category_id'=>5, 'price'=>540],
        ['name'=>'博多ぽてと', 'category_id'=>5, 'price'=>648],
        ['name'=>'とんがりコーン', 'category_id'=>3, 'price'=>180],
        ['name'=>'チュッパチャプス', 'category_id'=>2, 'price'=>48],
        ['name'=>'きのこの山', 'category_id'=>1, 'price'=>182],
        ['name'=>'生キャラメル', 'category_id'=>2, 'price'=>130],
        ['name'=>'ビエネッタ', 'category_id'=>4, 'price'=>220],
        ['name'=>'ふにょグミ', 'category_id'=>2, 'price'=>50],
        ['name'=>'ハイチュウ', 'category_id'=>2, 'price'=>120],
        ['name'=>'一本満足バー', 'category_id'=>1, 'price'=>142],
        ['name'=>'白い恋人', 'category_id'=>1, 'price'=>712],
        ['name'=>'かりんとう', 'category_id'=>3, 'price'=>630],
        ['name'=>'オールレーズン', 'category_id'=>3, 'price'=>194],
        ['name'=>'カルビーポテトチップス', 'category_id'=>3, 'price'=>70],
        ['name'=>'プロ野球チップス', 'category_id'=>3, 'price'=>104],
        ['name'=>'ばかうけ', 'category_id'=>3, 'price'=>160],
        ['name'=>'ミンティア', 'category_id'=>2, 'price'=>107],
        ['name'=>'ホールズ', 'category_id'=>2, 'price'=>140],
        ['name'=>'おっとっと', 'category_id'=>3, 'price'=>54],
        ['name'=>'ボンタンアメ', 'category_id'=>2, 'price'=>140],
        ['name'=>'明治ミルクチョコレート', 'category_id'=>1, 'price'=>114],
        ['name'=>'グリーンガム', 'category_id'=>2, 'price'=>105],
        ['name'=>'チョコパイ', 'category_id'=>1, 'price'=>356],
        ['name'=>'ミックスあられ', 'category_id'=>3, 'price'=>158],
        ['name'=>'チョコボール', 'category_id'=>1, 'price'=>92]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::PRODUCTS as $product) {
            (new \App\Models\Product($product))->save();
        }
    }
}
