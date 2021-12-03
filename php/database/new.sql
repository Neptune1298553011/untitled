/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : igg

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 03/12/2021 16:28:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for img
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img`  (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '商品id',
  `product_swiper_wrapper` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '轮播图',
  `product_note_body_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT '商品介绍图',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES (1, '1', '37.jpg', '41.jpg');
INSERT INTO `img` VALUES (2, '1', NULL, '44.jpg');
INSERT INTO `img` VALUES (3, '2', '38.jpg', '45.jpg');
INSERT INTO `img` VALUES (4, '2', NULL, '46.jpg');
INSERT INTO `img` VALUES (5, '3', '39.jpg', '47.jpg');
INSERT INTO `img` VALUES (6, '3', NULL, '48.jpg');
INSERT INTO `img` VALUES (7, '4', '40.jpg', '49.jpg');
INSERT INTO `img` VALUES (8, '4', NULL, '50.jpg');
INSERT INTO `img` VALUES (9, '5', '18.jpg', '51.jpg');
INSERT INTO `img` VALUES (10, '6', '25.jpg', '53.jpg');
INSERT INTO `img` VALUES (11, '6', NULL, '54.jpg');
INSERT INTO `img` VALUES (12, '7', '39.jpg', '47.jpg');
INSERT INTO `img` VALUES (13, '7', NULL, '48.jpg');
INSERT INTO `img` VALUES (14, '8', '57.jpg', '55.jpg');
INSERT INTO `img` VALUES (15, '8', NULL, '56.jpg');
INSERT INTO `img` VALUES (16, '9', '87.jpg', '88.jpg');
INSERT INTO `img` VALUES (17, '9', NULL, '89.jpg');
INSERT INTO `img` VALUES (18, '10', '58.jpg', '60.jpg');
INSERT INTO `img` VALUES (19, '10', NULL, '610jpg');
INSERT INTO `img` VALUES (20, '11', '63.jpg', '64.jpg');
INSERT INTO `img` VALUES (21, '11', NULL, '65.jpg');
INSERT INTO `img` VALUES (22, '12', '67.jpg', '68.jpg');
INSERT INTO `img` VALUES (23, '12', '', '69.jpg');
INSERT INTO `img` VALUES (24, '13', '71.jpg', '72.jpg');
INSERT INTO `img` VALUES (25, '13', NULL, '73.jpg');
INSERT INTO `img` VALUES (26, '14', '75.jpg', '76.jpg');
INSERT INTO `img` VALUES (27, '14', NULL, '77.jpg');
INSERT INTO `img` VALUES (28, '15', '83.jpg', '84.jpg');
INSERT INTO `img` VALUES (29, '15', NULL, '85.jpg');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品分类',
  `Product_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品类型',
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名字',
  `product_price` decimal(10, 2) NOT NULL COMMENT '商品价格',
  `product_information` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品信息',
  `product_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图片',
  `product_swiper_wrapper` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品轮播图',
  `product_note_body_img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品内容图1',
  `product_note_body_img2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '商品内容图2',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'new', '收藏品', '《时光公主》拉法耶特Q萌毛绒挂件', 100.00, '拉法耶特重磅登场！在现实中苏醒，守护你左右！\r\n\r\n所属游戏: 《时光公主》\r\n\r\n主要材料: 超柔水晶绒、合金、硅胶、毛毡\r\n\r\n填充物: 聚酯纤维\r\n\r\n尺寸: 高约14CM ', '5.jpg', '37.jpg', '41.jpg', '44.jpg');
INSERT INTO `product` VALUES (2, 'new', '收藏品', '时光公主 × 维也纳艺术史博物馆 梦幻精致礼盒套装', 16.00, '时光公主 × 维也纳艺术史博物馆梦幻精致礼盒套装，维也纳艺术史博物馆，全世界第四大艺术博物馆。具有文艺复兴时期的壮丽外观，更巧妙使用各色大理石的庄严内部装饰，不仅以丰富的收藏品吸引群众，更以博物馆的外观与内部装饰驰名于世。\n所属游戏: 时光公主\n书签材质&工艺: 黄铜，烤漆填色，电镀\n耳环材质&工艺: 电镀，镶嵌锆石，纯银耳针\n书签尺寸: 6 x 6 (cm) 链条:11 (cm)\n耳环尺寸: 3.5 x 3.5 (cm) 链条:4 (cm)\n包装盒尺寸: 22 x 22 (cm', '6.jpg', '38.jpg', '45.jpg', '46.jpg');
INSERT INTO `product` VALUES (3, 'new', '收藏品', '《王国纪元》光明之子魔物天团盲盒', 12.00, '《王国纪元》英雄魔物天团，立志成为制霸世界的传奇英雄 —— 光明之子！\r\n\r\n所属游戏: 王国纪元\r\n\r\n材质: PVC\r\n\r\n尺寸: 78mm*60mm*80mm\r\n\r\n数量: 单个盲盒/整盒已售罄\r\n\r\n温馨提示: 盲盒为特殊商品，非质量问题不支持退换。想要几个请拍几份，不保证无重复款。', '7.jpg', '39.jpg', '47.jpg', '48.jpg');
INSERT INTO `product` VALUES (4, 'new', '服饰', '《王国纪元》萌萌英雄现身T恤', 19.00, '2021年《王国纪元》第一款短袖T恤重磅推出，Q版图案可盐可甜；黑、白两色随心选择，时髦百搭；材质亲肤，炎炎夏日的不二之选\r\n\r\n品名: 《王国纪元》萌萌英雄现身T恤\r\n\r\n所属游戏: 王国纪元\r\n\r\n款式: 圆领\r\n\r\n颜色: 白色、黑色', '8.jpg', '40.jpg', '49.jpg', '50.jpg');
INSERT INTO `product` VALUES (5, 'hot', '服饰', '《城堡争霸》LOGO棒球帽', 28.00, '游戏经典LOGO，金色与黑色金属线搭配，简洁百搭。\r\n\r\n所属游戏: 城堡争霸\r\n\r\n款式: 棒球帽\r\n\r\n材质: 30%羊毛，70%涤纶\r\n\r\n产品尺寸: 56-60 CM', '9.jpg', '18.jpg', '51.jpg', '   ');
INSERT INTO `product` VALUES (6, 'hot', '收藏品', '《王国纪元》异界引路人场景手办', 122.00, '全球500只，限量珍藏。\r\n\r\n所属游戏: 王国纪元\r\n\r\n主要材质: PU\r\n\r\n产品尺寸: 138(L) x 90(W) x 100(H) MM\r\n\r\n包装尺寸: 220(L) x 240(W) x 105（H）MM', '10.jpg', '25.jpg', '53.jpg', '54.jpg');
INSERT INTO `product` VALUES (7, 'hot', '收藏品', '《王国纪元》光明之子魔物天团盲盒', 12.00, '《王国纪元》英雄魔物天团，立志成为制霸世界的传奇英雄 —— 光明之子！\r\n\r\n所属游戏: 王国纪元\r\n\r\n材质: PVC\r\n\r\n尺寸: 78mm*60mm*80mm\r\n\r\n数量: 单个盲盒/整盒已售罄\r\n\r\n温馨提示: 盲盒为特殊商品，非质量问题不支持退换。想要几个请拍几份，不保证无重复款。', '11.jpg', '39.jpg', '47.jpg', '48.jpg');
INSERT INTO `product` VALUES (8, 'hot', '收藏品', '\r\n《王国纪元》格里芬马克杯', 53.00, '神奇的魔物在这里\r\n\r\n游戏: 王国纪元\r\n\r\n款式: 格里芬\r\n\r\n材质: 陶瓷、PVC\r\n\r\n容量: 300ml', '12.jpg', '57.jpg', '55.jpg', '56.jpg');
INSERT INTO `product` VALUES (9, 'new', '收藏品', '王国纪元 × 铜师傅英雄系列黄铜手办\r\n', 98.00, '匠心力作，萌化人心，精雕细琢，带您零距离感受英雄的魅力\r\n\r\n出品方: 王国纪元 × 铜师傅\r\n\r\n角色名称: 誓言骑士、发条娃娃、曙光行者\r\n\r\n作品材质: 特A级精黄铜\r\n\r\n作品工艺: 古法锻造、手工打磨\r\n\r\n作品净重: 0.4KG\r\n\r\n作品高度: 7.4CM、7.6CM、8.0CM', '86.jpg', '87.jpg', '88.jpg', '89.jpg');
INSERT INTO `product` VALUES (10, 'new', '收藏品', '《城堡争霸》熔岩之翼龙蛋手办\r\n', 79.00, '熔岩之翼龙蛋手办再上架，匠心打造，软萌可爱，陪你争霸城堡！购买即赠《城堡争霸》礼品卡一张，礼品丰厚，不容错过！\r\n\r\n所属游戏: 城堡争霸\r\n\r\n产品尺寸: 9.0CM（H）\r\n\r\n包装尺寸: 17.5 x 11 x 11.7CM\r\n\r\n主要材质: 树脂\r\n\r\n商品包含: 手办、赠送CASTLE CLASH礼品卡一张', '59.jpg', '58.jpg', '60.jpg', '61.jpg');
INSERT INTO `product` VALUES (11, 'new', '收藏品', '《王国纪元》英雄手办胜利版套组', 217.00, '誓言骑士、玫瑰骑士、大个子、小恶魔、光明之子、仙境守护者\r\n\r\n所属游戏: 王国纪元\r\n\r\n主要材质: PVC、ABS\r\n\r\n产品尺寸: 85 - 200(H) MM\r\n\r\n商品包含: 誓言骑士、玫瑰骑士、大个子、小恶魔、光明之子、仙境守护者', '62.jpg', '63.jpg', '64.jpg', '65.jpg');
INSERT INTO `product` VALUES (12, 'new', '收藏品', '《王国纪元》玫瑰骑士手办 胜利版', 30.00, '精制材选，细腻涂装，丰富表情。让世界没有战争! 胜利就在眼前！\r\n\r\n所属游戏: 王国纪元\r\n\r\n主要材质: PVC、ABS\r\n\r\n产品重量: 0.4 KG\r\n\r\n产品尺寸: 70(W) x 70(D) x 155(H) MM\r\n\r\n包装尺寸: 135(W) x 115(D) x 165(H) MM', '66.jpg', '67.jpg', '68.jpg', '69.jpg');
INSERT INTO `product` VALUES (13, 'new', '收藏品', '《王国纪元》仙境守护者手办 胜利版', 52.00, '优选材质，手感醇厚，收藏价值高。\r\n\r\n所属游戏: 王国纪元\r\n\r\n主要材质: PVC、ABS\r\n\r\n产品重量: 0.55 KG\r\n\r\n产品尺寸: 110(W) x 105(D) x 115(H) MM\r\n\r\n包装尺寸: 135(W) x 115(D) x 165(H) MM', '70.jpg', '71.jpg', '72.jpg', '73.jpg');
INSERT INTO `product` VALUES (14, 'new', '收藏品', '《王国纪元》小恶魔手办 胜利版', 30.00, '自由率性，天真可爱，艾丽斯的顽劣，你害怕吗？\r\n\r\n所属游戏: 王国纪元\r\n\r\n主要材质: PVC、ABS\r\n\r\n产品重量: 0.35 KG\r\n\r\n产品尺寸: 70(W) x 70(D) x 100(H) MM\r\n\r\n包装尺寸: 115(W) x 115(D) x 135(H) MM', '74.jpg', '75.jpg', '76.jpg', '77.jpg');
INSERT INTO `product` VALUES (15, 'new', '收藏品', '《王国纪元》魔物马克杯套装', 129.00, '神奇的魔物在这里\r\n\r\n游戏: 王国纪元\r\n\r\n材质: 陶瓷、PVC\r\n\r\n商品包含: 2个小肚脐马克杯+3个魔物挂件', '82.jpg', '83.jpg', '84.jpg', '85.jpg');

SET FOREIGN_KEY_CHECKS = 1;
