protoc --proto_path=../protos   --php_out=./lib   --grpc_out=./lib   --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin   ../protos/echo.proto
protoc --proto_path=../protos   --php_out=./lib   --grpc_out=./lib   --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin   ../protos/hello.proto

#protoc ../protos/echo.proto   --php_out=./lib   --grpc_out=./lib   --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin 


