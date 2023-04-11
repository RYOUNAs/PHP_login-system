-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-04-11 11:54:02
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ph24`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `m_member`
--

CREATE TABLE `m_member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '氏名',
  `login_id` varchar(24) NOT NULL COMMENT 'ログインID',
  `password` varchar(64) NOT NULL COMMENT 'パスワード',
  `password_str` varchar(255) NOT NULL COMMENT 'ソルト',
  `password_cnt` bigint(20) NOT NULL COMMENT 'ストレッチ回数',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '作成日時',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `m_member`
--

INSERT INTO `m_member` (`id`, `name`, `login_id`, `password`, `password_str`, `password_cnt`, `created_at`, `updated_at`) VALUES
(1, '山田', 'yamada', '16806598599d30164727af12a04d1bb4', 'BTFY', 80123, '2023-04-11 18:50:12', '2023-04-11 18:50:12');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `m_member`
--
ALTER TABLE `m_member`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `m_member`
--
ALTER TABLE `m_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
