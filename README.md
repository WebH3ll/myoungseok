# myoungseok

## 깃허브와 로컬 폴더 연결
### 1. 깃 설치

https://git-scm.com/downloads

![image](https://user-images.githubusercontent.com/33647663/177064711-51c62274-b367-4dec-b128-c6b705233878.png)

``` 
Download for Windows ->  64-bit Git for Windows Setup.
```

다운로드 후, 기본 설정값 세팅 후 설치


### 2. xampp 폴더 중에서 htdocs 폴더에 있는 php 파일만 업로드

![image](https://user-images.githubusercontent.com/33647663/177064852-bd2dc758-c54b-4a55-8123-0571e2632280.png)

```
C:\xampp\htdocs로 이동
```

폴더에서 마우스 우클릭 후 **git bash here** 선택

![image](https://user-images.githubusercontent.com/33647663/177065341-ee7e0bc1-4a07-40eb-a123-6744a2797472.png)

계정 정보 등록

```bash
git config --global user.name "깃허브이름"
git config --global user.email "깃허브이메일"
```


깃허브 이름 -> 자신의 깃허브 페이지에서 나오는 이름
- ex) https://github.com/kangmyoungseok  : kangmyoungseok

깃허브 이메일 -> 깃허브 로그인 할때 사용하는 이메일 계정

아래의 정보 중 ```https://github.com/WebH3ll/myoungseok.git``` 이 부분만 자신의 레포지토리 주소 복사해서 바꿔넣기

```
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/WebH3ll/myoungseok.git
git push -u origin main
```


![image](https://user-images.githubusercontent.com/33647663/177066149-1fcad031-27ab-4e84-b781-655fd4c4e3ac.png)

성공적으로 명령어가 들어갔다면 현재 로컬 폴더와 원격 레포지토리가 연결된 것임


### 3.gitignore

vscode로 접속해 보면 다음과 같이 나오는데, 원격 레포지토리와 현재 로컬 폴더간의 차이가 발생한 파일들의 리스트가 나옴

![image](https://user-images.githubusercontent.com/33647663/177066308-7d56bc09-3e9a-45d2-a383-1957dd0fd2c4.png)

htdocs폴더에서 모든 파일을 원격 레포지토리에 저장할 것이 아니기 때문에 동기화를 제외할 폴더들을 **.gitignore**파일에 작성해 준다.

```.gitignore 파일 생성```

![image](https://user-images.githubusercontent.com/33647663/177066374-c3f0a042-c276-47dd-ac85-d3801fdd379e.png)

다음과 같이 동기화를 제외할 기존에 설치된 폴더들을 넣어준다.

![image](https://user-images.githubusercontent.com/33647663/177066425-f06ed102-70c8-44a0-8c10-cfc27ed79038.png)


그러면 동기화 파일 목록이 다음과 같이 줄어든다.

![image](https://user-images.githubusercontent.com/33647663/177066439-3c35994d-8b8d-47c8-b7d3-3f780b422f22.png)

이제 commit을 하여 원격 레포지토리로 업로드


### 4. 업로드 

```
+를 눌러서 전부 변경사항에 추가
```
![image](https://user-images.githubusercontent.com/33647663/177066499-a58ea597-0a7e-4d82-8b93-6c68c7acf1c2.png)

```
커밋 메시지를 작성 후 커밋(오른쪽 상단에 있는 v누르기)
```
![image](https://user-images.githubusercontent.com/33647663/177066538-0ad3f383-1bdc-4211-808d-c22466057bbe.png)


```
변경 내용 동기화 클릭
```

![image](https://user-images.githubusercontent.com/33647663/177066606-7ee70356-294b-4742-9c49-3318d370d968.png))


```
깃허브에 접속해서 동기화 확인
```

![image](https://user-images.githubusercontent.com/33647663/177066726-d6e6e925-7d28-4e32-9250-2b4ab1cd57fe.png)


## 클라우드에 웹페이지 올리기

### AWS Free Tier 가입

https://transferhwang.tistory.com/307

### EC2 생성 및 연동

https://kangmyoungseok.github.io/cloud/aws-install/

