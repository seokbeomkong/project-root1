# 진단 결과 CRUD 프로젝트

이 프로젝트는 PHP와 MySQL을 이용하여 진단 결과의 입력, 조회, 수정, 삭제 기능을 구현한 간단한 CRUD 애플리케이션입니다. Bootstrap을 활용하여 깔끔한 UI를 구성하였습니다.

## 설치 및 실행 방법

1. **필수 요구사항**
   - PHP
   - MySQL
   - 웹 서버 (Apache, Nginx 등) 또는 XAMPP/WAMP 같은 통합 패키지

2. **데이터베이스 설정**
   - MySQL에 접속하여 아래의 쿼리를 실행하여 데이터베이스 및 테이블을 생성합니다.

   ```sql
   CREATE DATABASE IF NOT EXISTS diagnosis_db;
   USE diagnosis_db;

   CREATE TABLE IF NOT EXISTS diagnosis (
       id INT(11) AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       diagnosis TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
